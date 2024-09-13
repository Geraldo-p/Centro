<?php

namespace App\Http\Controllers;

use App\Models\Pagamento\Pagamento;
use App\Http\Requests\StorePagamentoRequest;
use App\Http\Requests\UpdatePagamentoRequest;
use App\Models\Curso\Curso;
use App\Models\Formando\Formando;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagamentos = Pagamento::orderBy("em_falta", 'desc')->get();
        return view("admin.Pagamento.index", compact("pagamentos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::orderBy("nome")->get();
        $formandos = Formando::orderBy("nome")->get();
        return view("admin.Pagamento.create", compact("cursos", "formandos"));
    }

    public function pesquisar(Request $request)
    {
        $request->validate([
            'cod' => 'required|string|max:255',
        ]);

        $cod = $request->input("cod");
        $cursos = Curso::orderBy("nome")->get();
        $formandos = Formando::where("num_formando", $cod)->get();

        if ($formandos) {
            return view("admin.Pagamento.create", compact("cursos", "formandos", "cod"));
        } else {
            return redirect()->back()->with("erro", "Formando não encontrado");
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePagamentoRequest $request)
    {

        // dd($request->input(key: "valor"));

        try {

            $image_name = null;
            if ($request->hasFile('comprovativo')) {
                $file = $request->file('comprovativo');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("arquivo"), $image_name);
            }

            $carbon = Carbon::now('Africa/Luanda');
            $data_pagamento = $carbon->format('Y-m-d');
            $estado = "Pago";
            if ($request->input("em_falta") > 0) {
                $estado = "Em Falta";
            }

            Pagamento::create(
                [
                    'tipo' => $request->input("tipo"),
                    'comprovativo' => $image_name,
                    'data_pagamento' => $data_pagamento,
                    'valor' =>  $request->input(key: "valor"),
                    'em_falta' =>  $request->input(key: "em_falta"),
                    'percentagem' =>  $request->input(key: "percentagem"),
                    'estado' => $estado,
                    'formando_id' =>  $request->input(key: "formando_id"),
                    'id_us' => Auth::id(),
                ]
            );

            return redirect()->route("pagamentos.index")->with('sucesso', 'Pagamento efectuado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar efectuar o pagamento');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pagamento $pagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pagamento $pagamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePagamentoRequest $request, Pagamento $pagamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pagamento $pagamento)
    {
        //
    }
}
