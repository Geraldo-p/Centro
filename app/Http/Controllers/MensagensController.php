<?php

namespace App\Http\Controllers;

use App\Models\Mensagens\Mensagens;
use App\Http\Requests\StoreMensagensRequest;
use App\Http\Requests\UpdateMensagensRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = User::orderBy("name")->get();
        $mensagens = Mensagens::get();
        return view("admin.Mensagens.index", compact("mensagens", "todos"));
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
    public function store(StoreMensagensRequest $request)
    {
        $carbon = Carbon::now('Africa/Luanda');
        $data = $carbon->format('Y-m-d h:mm:ss');
        Mensagens::created(["estado" => "Recebido", "data_envio" => $data, "id_us" => Auth::id() ] + $request->all());
    }
    // descricao
    // estado
    // data_envio
    // data_recebido
    // recebido_por
    /**
     * Display the specified resource.
     */
    public function show(Mensagens $mensagens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensagens $mensagens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMensagensRequest $request, Mensagens $mensagens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensagens $mensagens)
    {
        //
    }
}
