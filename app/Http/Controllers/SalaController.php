<?php

namespace App\Http\Controllers;

use App\Models\Sala\Sala;
use App\Http\Requests\StoreSalaRequest;
use App\Http\Requests\UpdateSalaRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class SalaController extends Controller
{

    public function index()
    {
        $salas = Sala::orderBy("descricao")->get();
        return view('admin.Sala.index', compact("salas"));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        return view('admin.Sala.create');
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreSalaRequest $request)
    {

        try {
            Sala::create(['id_us' => Auth::id()] + $request->all());
            return back()->with('sucesso', 'Sala "' . $request->input("descricao") . '" criada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar a sala. "' . $request->input("descricao") . '"');
        }
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Sala $sala)
    {
        return view('admin.Sala.show', compact('sala'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Sala $sala)
    {
        return view('admin.Sala.update', compact('sala'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateSalaRequest $request, Sala $sala)
    {
        try {
            $sala->update($request->all());
            return redirect()->route('salas.index')->with('sucesso', 'Sala "' . $sala->descricao . '" atualizada com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar a sala "' . $sala->descricao . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Sala $sala)
    {
        try {
            $sala->delete();
            return back()->with('sucesso', 'A sala "' . $sala->descricao . '" foi excluída com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir a sala "' . $sala->descricao . '". Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Sala.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
