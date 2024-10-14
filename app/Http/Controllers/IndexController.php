<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePagamentoRequest;
use Illuminate\Http\Request;
use App\Models\Blog\Blog;
use App\Models\Curso\Curso;
use App\Models\Evento\Evento;
use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
use App\Models\Pagamento\Pagamento;
use App\Models\Sala\Sala;
use App\Models\Tag;
use App\Models\Turma\Turma;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {

        $cursos = Curso::inRandomOrder()->take(3)->get();
        $formadores = Funcionario::where("cargo", "Formador")->inRandomOrder()->take(3)->get();
        $totalCurs = Curso::all()->count();
        $totalTurma = Turma::all()->count();
        $totalFormando = Formando::all()->count();
        $posts = Blog::orderBy("data_publicacao", 'desc')->take(3)->get();
        $eventos = Evento::orderBy("data_inicio", 'desc')->take(4)->get();

        $cursosComMaisPagamentos = Pagamento::select('curso_id', Curso::raw('count(*) as total_pagamentos'))
            ->whereIn('curso_id', function ($query) {
                // Subconsulta para filtrar cursos com mais de 10 formandos
                $query->select('curso_id')
                    ->from('turma__formandos')
                    ->groupBy('curso_id')
                    ->having(Curso::raw('count(formando_id)'), '>', 10);
            })
            ->groupBy('curso_id')
            ->orderBy('total_pagamentos', 'desc')
            ->inRandomOrder()
            ->take(5)
            ->get();

        $funcionarios = Funcionario::inRandomOrder()->take(3)->get();
        // where("cargo", "Formador")->
        return view('layouts user/index', compact("cursos", "eventos", "funcionarios", "posts", "totalCurs", "totalTurma", "totalFormando", "cursosComMaisPagamentos"));
    }

    public function Curso_Show(Curso $cursos)
    {
        $NossoCursos = Curso::withCount('modulos')
            ->inRandomOrder()
            ->take(7)
            ->get();

        // PEGAR FORMADOR ASSOCIADO AO CURSO
        $formador = Curso::with('turmas.funcionarios')->find($cursos->id);
        foreach ($formador->turmas as $turma) {
            $funcionario = $turma->funcionarios;
        }

        $cursosComMaisPagamentos = Pagamento::select('curso_id', Curso::raw('count(*) as total_pagamentos'))
            ->whereIn('curso_id', function ($query) {
                // Subconsulta para filtrar cursos com mais de 10 formandos
                $query->select('curso_id')
                    ->from('turma__formandos')
                    ->groupBy('curso_id')
                    ->having(Curso::raw('count(formando_id)'), '>', 10);
            })
            ->groupBy('curso_id')
            ->orderBy('total_pagamentos', 'desc')
            ->inRandomOrder()
            ->take(3)
            ->get();
        $modulos1 = $cursos->modulos->slice(0, ceil($cursos->modulos->count() / 2));
        $modulos2 = $cursos->modulos->slice(ceil($cursos->modulos->count() / 2));
        return view('layouts user/Cursos/show', compact("cursos", "cursosComMaisPagamentos", "funcionario", "NossoCursos", "modulos1", "modulos2"));
    }

    public function Inscrever_Curso($cursoID)
    {

        $cursos = Curso::where("id", $cursoID)->get();
        $formandos = Formando::where("id_us", Auth::id())->get();

        foreach ($formandos as $formando) {
            $cod = $formando->num_formando;
        }

        if ($formandos) {
            return view("layouts user.Cursos.inscricao", compact("cursos", "formandos", "cod"));
        } else {
            return redirect()->back()->with("erro", "Formando não encontrado");
        }
    }

    public function store(StorePagamentoRequest $request)
    {
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
                    'valor' => $request->input(key: "valor"),
                    'em_falta' => $request->input(key: "em_falta"),
                    'percentagem' => $request->input(key: "percentagem"),
                    'estado' => $estado,
                    'formando_id' => $request->input(key: "formando_id"),
                    'id_us' => Auth::id(),
                    'curso_id' => $request->input(key: "curso_id"),

                ]
            );

            return redirect()->route("/")->with('sucesso', 'Pagamento efectuado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar efectuar o pagamento');
        }
    }

    public function Todos_Cursos()
    {

        $cursosComMaisPagamentos = Pagamento::select('curso_id', Curso::raw('count(*) as total_pagamentos'))
            ->whereIn('curso_id', function ($query) {
                // Subconsulta para filtrar cursos com mais de 10 formandos
                $query->select('curso_id')
                    ->from('turma__formandos')
                    ->groupBy('curso_id')
                    ->having(Curso::raw('count(formando_id)'), '>', 10);
            })
            ->groupBy('curso_id')
            ->orderBy('total_pagamentos', 'desc')
            ->inRandomOrder()
            ->take(5)
            ->get();
        // selecionar todos os cursos ordem aleatoria
        $cursos = Curso::inRandomOrder()->get();
        return view('layouts user.Cursos.cursos', compact("cursos", "cursosComMaisPagamentos"));
    }

    public function Evento_Show($id)
    {
        $dataSistema = Carbon::now('Africa/Luanda');
        $posts = Blog::where('data_publicacao', '<=', $dataSistema)
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        // dd($dataSistema);

        $cursosComMaisPagamentos = Pagamento::select('curso_id', Curso::raw('count(*) as total_pagamentos'))
            ->whereIn('curso_id', function ($query) {
                // Subconsulta para filtrar cursos com mais de 10 formandos
                $query->select('curso_id')
                    ->from('turma__formandos')
                    ->groupBy('curso_id')
                    ->having(Curso::raw('count(formando_id)'), '>', 10);
            })
            ->groupBy('curso_id')
            ->orderBy('total_pagamentos', 'desc')
            ->inRandomOrder()
            ->take(3)
            ->get();

        $cursos = Curso::withCount('modulos')
            ->inRandomOrder()
            ->take(7)
            ->get();
        $tags = Tag::all();

        $cursos = Curso::withCount('modulos')
            ->inRandomOrder()
            ->take(7)
            ->get();

        $evento = Evento::find($id);

        $temas = explode(',', $evento->temas);
        $metade = ceil(count($temas) / 2);
        $temasParte1 = array_slice($temas, 0, $metade);
        $temasParte2 = array_slice($temas, $metade);

        $eventos = Evento::where('data_inicio', '>=', Carbon::now())
            ->where('id', '!=', $id)
            ->inRandomOrder()
            ->take(2)
            ->get();

        return view("layouts user.Evento.show", compact("temasParte2", "eventos", "temasParte1", "evento", "tags", "cursosComMaisPagamentos", "posts", "cursos", "dataSistema"));
    }

    public function Eventos()
    {
        return view("layouts user.Evento.eventos");
    }
}
