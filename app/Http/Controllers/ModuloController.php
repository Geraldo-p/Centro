<?php

namespace App\Http\Controllers;

use App\Models\Modulo\Modulo;
use App\Http\Requests\StoreModuloRequest;
use App\Http\Requests\UpdateModuloRequest;
use App\Models\Curso\Curso;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ModuloController extends Controller
{
    public function index()
    {
        $modulos = Modulo::orderBy('nome')->get();
        return view('admin.Modulo.index', compact('modulos'));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        $cursos = Curso::orderBy('nome', 'asc')->get();
        return view('admin.Modulo.create', compact("cursos"));
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreModuloRequest $request)
    {

        try {
            Modulo::create(['id_us' => Auth::id()] + $request->all());
            return back()->with('sucesso', 'Modulo "' . $request->input("nome") . '" criado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar o modulo. "' . $request->input("nome") . '"');
        }
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Modulo $modulo)
    {
        return view('admin.Modulo.show', compact('modulo'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Modulo $modulo)
    {
        $cursos = Curso::orderBy('nome', 'asc')->get();
        return view('admin.Modulo.update', compact('modulo', "cursos"));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateModuloRequest $request, Modulo $modulo)
    {
        try {
            $modulo->update($request->all());
            return redirect()->route('modulos.index')->with('sucesso', 'Modulo "' . $modulo->nome . '" atualizado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar o modulo "' . $modulo->nome . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Modulo $modulo)
    {
        try {
            $modulo->delete();
            return back()->with('sucesso', 'O modulo "' . $modulo->nome . '" foi excluído com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir o modulo "' . $modulo->nome . '". Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Modulo.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
