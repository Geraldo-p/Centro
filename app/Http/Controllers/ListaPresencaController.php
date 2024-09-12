<?php

namespace App\Http\Controllers;

use App\Models\Lista_de_Presenca\Lista_Presenca;
use App\Http\Requests\StoreLista_PresencaRequest;
use App\Http\Requests\UpdateLista_PresencaRequest;
use App\Models\Formando\Formando;
use App\Models\Lista_de_Presenca_Principal\Lista_Presenca_Principal;
use App\Models\Modulo\Modulo;
use Illuminate\Support\Facades\Auth;

class ListaPresencaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista_presencas = Lista_Presenca::orderBy("data_presenca")->get();
        return view("admin.Lista de Presença.index", compact("lista_presencas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modulos = Modulo::orderBy("nome")->get();
        $formandos = Formando::orderBy("nome")->get();
        return view("admin.Lista de Presença.create", compact("modulos", "formandos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLista_PresencaRequest $request)
    {
        try {
            $listaPresenca = Lista_Presenca_Principal::create(["id_us" => Auth::user()->id] + $request->all());

            foreach ($request->carrinho_formando_id_val as $index => $formandoId) {
                $presenca = new Lista_Presenca();
                $presenca->formando_id = $formandoId;
                $presenca->presenca = $request->input('presenca');
                $presenca->lista_id = $listaPresenca->id;
                $presenca->id_us = Auth::user()->id;
                $presenca->save();
            }

            return back()->with('sucesso', 'Lista de Presença adicionada');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar Guardar a Lista de Presença');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lista_Presenca $lista_Presenca)
    {
        // return view("admin.Lista de Presença.show", compact("lista_Presenca"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lista_Presenca $lista_Presenca)
    {
        // $modulos = $lista_Presenca->modulos;
        // $formandos = $lista_Presenca->formandos;
        // return view("admin.Lista de Presença.update", compact("modulos", "formandos"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLista_PresencaRequest $request, Lista_Presenca $lista_Presenca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lista_Presenca $lista_Presenca)
    {
        try {

        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir a o formando da turma. Por favor, tente novamente.');
        }
    }
}
