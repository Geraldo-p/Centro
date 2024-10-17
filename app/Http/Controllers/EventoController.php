<?php

namespace App\Http\Controllers;

use App\Models\Evento\Evento;
use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;
use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::orderBy("titulo")->get();
        return view("admin.Evento.index", compact("eventos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $funcionarios = Funcionario::orderBy("nome")->get();
        return view("admin.Evento.create", compact("funcionarios"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventoRequest $request)
    {
        try {
            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("/Evento"), $image_name);
            }

            Evento::create([

                'titulo' => $request->input("titulo"),
                'descricao' => $request->input("descricao"),
                'resumo' => $request->input("resumo"),
                'data_inicio' => $request->input("data_inicio"),
                'data_fim' => $request->input("data_fim"),
                'local' => $request->input("local"),
                'imagem' => $image_name,
                'tipo_evento' => $request->input("tipo_evento"),
                'temas' => $request->input("temas"),
                'status' => $request->input("status"),
                'capacidade' => $request->input("capacidade"),
                'custo' => $request->input("custo"),
                'id_us' => Auth::id(),
                'funcionario_id' => $request->input("funcionario_id"),


            ]);
            return redirect()->route("eventos.index")->with('sucesso', 'Evento "' . $request->input("titulo") . '" agendado com sucesso.');

        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar agendar o evento. "' . $request->input("titulo"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        $funcionarios = Funcionario::orderBy("nome")->get();

        return view("admin.Evento.edit", compact("evento", "funcionarios"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventoRequest $request, Evento $evento)
    {
        try {
            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("/Evento"), $image_name);
            }

            if (is_null($image_name)) {
                $evento->update([
                    'titulo' => $request->input("titulo"),
                    'descricao' => $request->input("descricao"),
                    'resumo' => $request->input("resumo"),
                    'data_inicio' => $request->input("data_inicio"),
                    'data_fim' => $request->input("data_fim"),
                    'local' => $request->input("local"),
                    'tipo_evento' => $request->input("tipo_evento"),
                    'temas' => $request->input("temas"),
                    'status' => $request->input("status"),
                    'capacidade' => $request->input("capacidade"),
                    'custo' => $request->input("custo"),
                    'funcionario_id' => $request->input("funcionario_id"),
                ]);
            } else {
                $evento->update([
                    'titulo' => $request->input("titulo"),
                    'descricao' => $request->input("descricao"),
                    'resumo' => $request->input("resumo"),
                    'data_inicio' => $request->input("data_inicio"),
                    'data_fim' => $request->input("data_fim"),
                    'local' => $request->input("local"),
                    'imagem' => $image_name,
                    'tipo_evento' => $request->input("tipo_evento"),
                    'temas' => $request->input("temas"),
                    'status' => $request->input("status"),
                    'capacidade' => $request->input("capacidade"),
                    'custo' => $request->input("custo"),
                    'funcionario_id' => $request->input("funcionario_id"),
                ]);
            }


            return redirect()->route("eventos.index")->with('sucesso', 'Evento "' . $request->input("titulo") . '" Actualizado com sucesso');

        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar actualizar o evento. "' . $request->input("titulo"));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        try {
            $evento->delete();
            return back()->with('sucesso', 'Evento "' . $evento->titulo . '" Removido com sucesso');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar remover o evento. "' . $evento->titulo);
        }
    }


    
}
