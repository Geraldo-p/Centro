<?php

namespace App\Http\Controllers;

use App\Models\Categoria\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::get();
        return view("admin.Categoria.index", compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.Categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request)
    {
        try {

            $userId = Auth::id();
            Categoria::create($request->all() + ["id_us" => $userId]);
            return back()->with("sucesso", "Categoria criada com sucesso");
        } catch (\Throwable $th) {
            return view("admin.Categoria.create")->with("erro", "Aconteceu algum problema ao tentar adicionar nova categoria");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view("admin.Categoria.update", compact("categoria"));
    }

    public function editar(Categoria $categoria)
    {
        return view("admin.Categoria.update", compact("categoria"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        try {
            $categoria->update($request->all());
            return redirect()->route('categorias.index')->with('sucesso', 'Categoria ' . $categoria->nome . ' atualizada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with("erro", "Aconteceu algo inesperado ao tentar actualizar a categoria " . $categoria->nome . " por favor tente novamente");
        }
    }
    public function update2(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        // dd($categoria->id);
        // try {
            $categoria->update($request->all());
            return redirect()->route('categorias.index')->with('sucesso', 'Categoria ' . $categoria->nome . ' atualizada com sucesso.');
        // } catch (\Throwable $th) {
        //     return back()->with("erro", "Aconteceu algo inesperado ao tentar actualizar a categoria " . $categoria->nome . " por favor tente novamente");
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        dd($categoria->id);
        $categoria->delete();
        return back()->with("sucesso", "A categoria " . $categoria->nome . " foi excluido com sucesso");
    }
    public function excluir(Categoria $categoria)
    {
        try {
            $categoria->delete();
            return back()->with("sucesso", "A categoria " . $categoria->nome . " foi excluida com sucesso");
        } catch (\Throwable $th) {
            return back()->with("erro", "A categoria " . $categoria->nome . " foi excluida com sucesso");
        }
    }
}
