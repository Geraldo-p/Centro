<?php

namespace App\Http\Controllers;

use App\Models\Lista_de_Presenca\Lista_Presenca;
use App\Http\Requests\StoreLista_PresencaRequest;
use App\Http\Requests\UpdateLista_PresencaRequest;

class ListaPresencaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLista_PresencaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lista_Presenca $lista_Presenca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lista_Presenca $lista_Presenca)
    {
        //
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
        //
    }
}
