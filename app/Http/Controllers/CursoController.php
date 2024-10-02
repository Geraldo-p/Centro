<?php

namespace App\Http\Controllers;

use App\Models\Categoria\Categoria;
use App\Models\Curso\Curso;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use App\Mail\EnviarEmail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isNull;

class CursoController extends Controller
{
    /**
     * Exibe uma lista de recursos.
     */
    public function index()
    {
        $mensagem = "ola como estas";
        $subt = "email de teste";
        $resp = Mail::to('inforge68@gmail.com')->send(new EnviarEmail($mensagem, $subt));
        dd($resp);
        // $mensagem = "ola como estas";
        // $subt = "email de teste";

        // try {
        //     Mail::to('inforge68@gmail.com')->send(new EnviarEmail($mensagem, $subt));
        //     return "E-mail enviado com sucesso!";
        // } catch (\Exception $e) {
        //     return "Falha ao enviar o e-mail: " . $e->getMessage();
        // }
        // $cursos = Curso::orderBy('nome')->get();
        // return view('admin.Curso.index', compact('cursos'));
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
            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }

            Curso::create(['id_us' => Auth::id(), 'foto' => $image_name] + $request->all());
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
        $categoria = Categoria::where("familia", "Curso")->orderBy("nome")->get();
        return view('admin.Curso.update', compact('curso', "categoria"));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateCursoRequest $request, Curso $curso)
    {
        try {
            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }
            if (!is_null($image_name)) {

                $curso->update(['foto' => $image_name] + $request->all());
            } else {
                $curso->update(['foto' => $request->input("foto2")] + $request->all());
            }

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
            return back()->with('sucesso', 'O curso "' . $curso->nome . '" foi excluído com sucesso.');
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
