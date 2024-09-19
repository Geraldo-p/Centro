<?php

namespace App\Http\Controllers;

use App\Models\Turma\Turma;
use App\Http\Requests\StoreTurmaRequest;
use App\Http\Requests\UpdateTurmaRequest;
use App\Models\Contacto\Contacto;
use App\Models\Curso\Curso;
use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
use App\Models\Sala\Sala;
use App\Models\Turma_Formando\Turma_Formando;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::orderBy("nome")->get();
        return view('admin.Turma.index', compact("turmas"));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {

        $formadores = Funcionario::where("cargo", "Formador")->orderBy("nome")->get();
        $salas = Sala::orderBy("descricao")->get();
        $cursos = Curso::orderBy("nome")->get();
        return view('admin.Turma.create', compact("formadores", "cursos", "salas"));
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreTurmaRequest $request)
    {


        try {
            Turma::create(['id_us' => Auth::id()] + $request->all());
            return back()->with('sucesso', 'Turma "' . $request->input("nome") . '" criada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar a turma. "' . $request->input("nome") . '"');
        }
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Turma $turma)
    {
        $turma = Turma::with('formandos')->find($turma->id);
        $formandos = $turma->formandos;
        $salas = $turma->salas;
        return view('admin.Turma.show', compact('turma', "formandos", "salas"));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Turma $turma)
    {
        $formadores = Funcionario::where("cargo", "Formador")->orderBy("nome")->get();
        $salas = Sala::orderBy("descricao")->get();
        $cursos = Curso::orderBy("nome")->get();

        return view('admin.Turma.update', compact('turma', "cursos", 'formadores', 'salas'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateTurmaRequest $request, Turma $turma)
    {
        try {
            $turma->update($request->all());
            return redirect()->route('turmas.index')->with('sucesso', 'Turma "' . $turma->nome . '" atualizada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar a turma "' . $turma->nome . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Turma $turma)
    {
        try {
            $turma->delete();
            return back()->with('sucesso', 'A turma "' . $turma->nome . '" foi excluída com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir a turma "' . $turma->nome . '". Por favor, tente novamente.');
        }
    }
    public function eliminar($formandoid)
    {
        try {

            $Turma_formando =  Turma_Formando::where("formando_id", $formandoid)->first();
            $formando =  Formando::where("id", $formandoid)->first();
            $Turma_formando->delete();

            return back()->with('sucesso', 'O formando "' . $formando->nome . '" foi retirado da turma.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir a o formando da turma. Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Turma.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
