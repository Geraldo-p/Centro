<?php

namespace App\Http\Controllers;

use App\Models\Turma_Formando\Turma_Formando;
use App\Http\Requests\StoreTurma_FormandoRequest;
use App\Http\Requests\UpdateTurma_FormandoRequest;
use App\Models\Curso\Curso;
use App\Models\Formando\Formando;
use App\Models\Sala\Sala;
use App\Models\Turma\Turma;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TurmaFormandoController extends Controller
{

    public function index()
    {
        $turma_formandos = Turma_Formando::get();
        return view('admin.Turma_Formando.index', compact("turma_formandos"));
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
        return view('admin.Turma_Formando.create', compact("formandos",'salas', "cursos", "turmas"));
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreTurma_FormandoRequest $request)
{
    try {
        $estado = false;

        // Loop através dos carrinhos de turmas e formandos
        foreach ($request->carrinho_turma_id_val as $index => $turmaId) {
            $formandoId = $request->carrinho_formando_id_val[$index];

            // Verifica se o formando já está na turma
            $exists = DB::table('turma__formandos')
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
                ->leftJoin('turma__formandos as tf', 't.id', '=', 'tf.turma_id')
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
            Turma_Formando::create([
                'turma_id' => $turmaId,
                'formando_id' => $formandoId,
                'id_us' => Auth::id(),
            ]);
        }

        // Mensagem de feedback com base nos resultados
        if ($estado) {
            return back()->with('warning', 'Alguns formandos não foram adicionados à turma porque já estão cadastrados ou a turma está cheia.');
        }

        return back()->with('sucesso', 'Formandos adicionados com sucesso à turma.');
    } catch (\Throwable $th) {
        // Tratamento de exceção
        return back()->with('erro', 'Ocorreu um problema ao tentar adicionar os formandos à turma.');
    }
}


    /**
     * Exibe o recurso especificado.
     */
    public function show(Turma_Formando $turma_formando)
    {
        return view('admin.Turma_Formando.show', compact('turma_formando'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Turma_Formando $turma_formando)
    {
        $formandos = Formando::orderBy("nome")->get();
        $turmas = Turma::orderBy("nome")->get();
        $cursos = Curso::orderBy("nome")->get();

        return view('admin.Turma_Formando.update', compact('turma_formando', 'cursos', 'formandos', 'turmas'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateTurma_FormandoRequest $request, Turma_Formando $turma_formando)
    {
        try {
            $turma_formando->update($request->all());
            return redirect()->route('turma_formandos.index')->with('sucesso', 'Dados atualizada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar os dados. Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Turma_Formando $turma_formando)
    {
        try {
            $turma_formando->delete();
            $formandos = $turma_formando->formandos;
            // return redirect()->route('turmas.show', $turma_formando->id)->with('sucesso', 'o formando'.$formandos->nome .'Foi excluido da turma');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir a o formando da turma. Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Turma_Formando.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
