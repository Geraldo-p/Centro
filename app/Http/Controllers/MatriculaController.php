<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMatriculaRequest;
use App\Http\Requests\UpdateMatriculaRequest;
use App\Models\Matricula\Matricula;
use App\Models\Curso\Curso;
use App\Models\Formando\Formando;
use App\Models\Sala\Sala;
use App\Models\Turma\Turma;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{

    public function index()
    {
        $matriculas = Matricula::get();
        return view('admin.Matricula.index', compact("matriculas"));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        //selecionar formandos apenas que tenham feito o pagamento
        $formandos = Formando::whereHas('pagamentos')->orderBy('nome')->get();
        $turmas = Turma::orderBy("nome")->get();
        $cursos = Curso::orderBy("nome")->get();
        $salas = Sala::orderBy("nome")->get();
        return view('admin.Matricula.create', compact("formandos",'salas', "cursos", "turmas"));
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreMatriculaRequest $request)
{
    try {
        $estado = false;

        // Loop através dos carrinhos de turmas e formandos
        foreach ($request->carrinho_turma_id_val as $index => $turmaId) {
            $formandoId = $request->carrinho_formando_id_val[$index];

            // Verifica se o formando já está na turma
            $exists = DB::table('matriculas')
                ->where('turma_id', $turmaId)
                ->where('formando_id', $formandoId)
                ->exists();

            if ($exists) {
                $estado = true;
                continue; // Passa para o próximo formando se já estiver cadastrado
            }

            // Obtém a quantidade de formandos na turma e a capacidade da sala
            $turmaInfo = DB::table('turmas as t')
                ->join('salas as s', 't.sala_id', '=', 's.id')
                ->leftJoin('matriculas as tf', 't.id', '=', 'tf.turma_id')
                ->where('t.id', $turmaId)
                ->select(
                    's.capacidade',
                    DB::raw('COUNT(tf.formando_id) as total_formandos')
                )
                ->groupBy('s.capacidade')
                ->first();

            // Verifica se a turma está cheia
            if ($turmaInfo->total_formandos >= $turmaInfo->capacidade) {
                $estado = true;
                continue; // Se a turma estiver cheia, não adiciona mais formandos
            }

            // Adiciona o formando à turma se não houver erros
            Matricula::create([
                'turma_id' => $turmaId,
                'formando_id' => $formandoId,
                'id_us' => Auth::id(),
            ]);
        }

        // Mensagem de feedback com base nos resultados
        if ($estado) {
            return back()->with('warning', 'Alguns formandos não foram Matriculados porque já fazem parte da turma selecionada.');
        }

        return back()->with('sucesso', 'Formandos Matriculados com sucesso.');
    } catch (\Throwable $th) {
        // Tratamento de exceção
        return back()->with('erro', 'Ocorreu um problema ao tentar adicionar os formandos à turma.');
    }
}


    /**
     * Exibe o recurso especificado.
     */
    public function show(Matricula $matricula)
    {
        return view('admin.Matricula.show', compact('matricula'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Matricula $matricula)
    {
        $formandos = Formando::orderBy("nome")->get();
        $turmas = Turma::orderBy("nome")->get();
        $cursos = Curso::orderBy("nome")->get();

        return view('admin.Matricula.update', compact('matricula', 'cursos', 'formandos', 'turmas'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateMatriculaRequest $request, Matricula $matricula)
    {
        try {
            $matricula->update($request->all());
            return redirect()->route('matriculas.index')->with('sucesso', 'Dados atualizada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar os dados. Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Matricula $matricula)
    {
        try {
            $matricula->delete();
            $formandos = $matricula->formandos;
            // return redirect()->route('turmas.show', $matricula->id)->with('sucesso', 'o formando'.$formandos->nome .'Foi excluido da turma');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir a matricula. Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Matricula.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
