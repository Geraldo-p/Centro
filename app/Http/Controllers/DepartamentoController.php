<?php

namespace App\Http\Controllers;

use App\Models\Departamento\departamento;
use App\Http\Requests\StoredepartamentoRequest;
use App\Http\Requests\UpdatedepartamentoRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = departamento::orderBy('nome')->get();



        return view('admin.Departamento.index', compact('departamentos'));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        return view('admin.Departamento.create');
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoredepartamentoRequest $request)
    {

        try {
            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }

            departamento::create(['id_us' => Auth::id(), 'foto' => $image_name] + $request->all());
            return back()->with('sucesso', 'departamento "' . $request->input("nome") . '" criado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar o departamento. "' . $request->input("nome") . '"');
        }
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(departamento $departamento)
    {
        return view('admin.Departamento.show', compact('departamento'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(departamento $departamento)
    {
        return view('admin.Departamento.update', compact('departamento'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdatedepartamentoRequest $request, departamento $departamento)
    {
        try {
            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }
            if (!is_null($image_name)) {

                $departamento->update(['foto' => $image_name] + $request->all());
            } else {
                $departamento->update(['foto' => $request->input("foto2")] + $request->all());
            }

            return redirect()->route('departamentos.index')->with('sucesso', 'departamento "' . $departamento->nome . '" atualizado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar o departamento "' . $departamento->nome . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(departamento $departamento)
    {
        try {
            $departamento->delete();
            return back()->with('sucesso', 'O departamento "' . $departamento->nome . '" foi excluído com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir o departamento "' . $departamento->nome . '". Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Departamento.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
