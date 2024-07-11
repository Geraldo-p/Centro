<?php

namespace App\Http\Controllers;

use App\Models\Categoria\Categoria;
use App\Models\Curso\Curso;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    /**
     * Exibe uma lista de recursos.
     */
    public function index()
    {
        $cursos = Curso::orderBy('nome')->get();
        return view('admin.Curso.index', compact('cursos'));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        $categoria = Categoria::where('familia', 'Curso')->orderBy('nome', 'asc')->get();
        return view('admin.Curso.create', compact("categoria"));
    }

    /**
     * Armazena um novo recurso no armazenamento.
     */
    public function store(StoreCursoRequest $request)
    {
        try {
            // $pasta_fish = public_path("images");

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }

            $userId = Auth::id();
            Curso::create($request->all() + ['id_us' => $userId, 'foto' => $image_name]);
            return back()->with('sucesso', 'Curso "' . $request->input("nome") . '" criado com sucesso.');

        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar adicionar o curso. "' . $request->input("nome") . '"');
        }
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Curso $curso)
    {
        return view('admin.Curso.show', compact('curso'));
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Curso $curso)
    {
        return view('admin.Curso.update', compact('curso'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateCursoRequest $request, Curso $curso)
    {
        try {
            $curso->update($request->all());
            return redirect()->route('cursos.index')->with('sucesso', 'Curso "' . $curso->nome . '" atualizado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar o curso "' . $curso->nome . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Curso $curso)
    {
        try {
            $curso->delete();
            return back()->with('sucesso', 'A curso "' . $curso->nome . '" foi excluído com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir o curso "' . $curso->nome . '". Por favor, tente novamente.');
        }
    }

    public function generatePdf()
    {
        $data = ['title' => 'Exemplo de PDF'];
        $pdf = Pdf::loadView('admin.Curso.pdf', $data);
        return $pdf->download('exemplo.pdf');
    }
}
