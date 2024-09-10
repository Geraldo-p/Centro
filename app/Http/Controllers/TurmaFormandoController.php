<?php

namespace App\Http\Controllers;

use App\Models\Turma_Formando\Turma_Formando;
use App\Http\Requests\StoreTurma_FormandoRequest;
use App\Http\Requests\UpdateTurma_FormandoRequest;
use App\Models\Formando\Formando;
use App\Models\Turma\Turma;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
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
        $formandos = Formando::orderBy("nome")->get();
        $turmas = Turma::orderBy("nome")->get();
        return view('admin.Turma_Formando.create', compact("formandos", "turmas"));
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreTurma_FormandoRequest $request)
    {

        try {
            Turma_Formando::create(['id_us' => Auth::id()] + $request->all());
            return back()->with('sucesso', 'Formando/os Adicionado/os na turma_formando');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar os formandos na turma_formando');
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
        return view('admin.Turma_Formando.update', compact('turma_formando', 'formandos', 'turmas'));
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
            return back()->with('sucesso', 'os Dados foram excluídos com sucesso.');
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
