<?php

namespace App\Http\Controllers;

use App\Models\Categoria\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    /**
     * Exibe uma lista de recursos.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('nome')->get();
        return view('admin.Categoria.index', compact('categorias'));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        return view('admin.Categoria.create');
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreCategoriaRequest $request)
    {
        try {
            $userId = Auth::id();
            Categoria::create($request->all() + ['id_us' => $userId]);
            return back()->with('sucesso', 'Categoria "' . $request->input("nome") . '" criada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar a categoria. "' . $request->input("nome") . '"');
        }
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Categoria $categoria)
    {
        return view('admin.Categoria.show', compact('categoria'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.Categoria.update', compact('categoria'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        try {
            $categoria->update($request->all());
            return redirect()->route('categorias.index')->with('sucesso', 'Categoria "' . $categoria->nome . '" atualizada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar a categoria "' . $categoria->nome . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Categoria $categoria)
    {
        try {
            $categoria->delete();
            return back()->with('sucesso', 'A categoria "' . $categoria->nome . '" foi excluída com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir a categoria "' . $categoria->nome . '". Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Categoria.pdf', $data);
        return $pdf->download('exemplo.pdf');

    }
}
