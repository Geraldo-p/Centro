<?php

namespace App\Http\Controllers;

use App\Models\Blog\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Categoria\Categoria;
use App\Models\Curso\Curso;
use App\Models\Pagamento\Pagamento;
use App\Models\Tag;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $posts = Blog::orderBy("titulo")->get();
        $dataSistema = Carbon::now('Africa/Luanda');
        // $dataQualquer = Carbon::parse($dataQualquer, 'Africa/Luanda');

        return view("layouts user.Blog.index", compact("posts", "dataSistema"));
    }

    public function posts()
    {
        $posts = Blog::orderBy("titulo")->get();
        return view("layouts user.Blog.posts", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy("nome")->get();
        return view("layouts user.Blog.create", compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        try {
            $image_name = null;

            // Verifica se o arquivo de imagem foi enviado e processa o upload
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("blog"), $image_name);
            }

            // Cria o post com os dados do request
            $post = Blog::create([
                'imagem' => $image_name,
                'view' => 0,
                'id_us' => Auth::id(),
                'titulo' => $request->input('titulo'),
                'resumo' => $request->input('resumo'),
                'conteudo' => $request->input('conteudo'),
                'data_publicacao' => $request->input('data_publicacao'),
                'id_categ' => $request->input('id_categ'),
            ]);

            // Processa as tags e associa-as ao post
            $tags = collect(explode(',', $request->input("tags")))->map(function ($tag) {
                return Tag::firstOrCreate(['nome' => trim($tag)]);
            });

            // Associa as tags ao post
            $post->tags()->sync($tags->pluck('id'));

            return redirect()->route("blogs.index")->with('sucesso', 'Post Criado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar criar o post: ' . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
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

        return view("layouts user.Blog.show", compact("posts", "tags", "cursosComMaisPagamentos", "cursos", "blog"));
    }

    public function post()
    {
        $dataSistema = Carbon::now('Africa/Luanda');
        $posts = Blog::where('data_publicacao', '<=', $dataSistema)
            ->orderBy('created_at', 'desc')
            ->paginate(3);

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

        return view("layouts user.Blog.posts", compact("tags", "posts", "cursosComMaisPagamentos", "cursos"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categorias = Categoria::orderBy("nome")->get();

        $tags = $blog->tags->pluck('nome')->toArray();
        $tagsString = implode(', ', $tags);

        return view("layouts user.Blog.edit", compact("blog", "categorias", "tagsString"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        try {
            $image_name = null;

            // Verifica se o arquivo de imagem foi enviado e processa o upload
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("blog"), $image_name);
            }

            // Cria o post com os dados do request
            $blog->update([
                'imagem' => $image_name,
                'view' => 0,
                'id_us' => Auth::id(),
                'titulo' => $request->input('titulo'),
                'resumo' => $request->input('resumo'),
                'conteudo' => $request->input('conteudo'),
                'data_publicacao' => $request->input('data_publicacao'),
                'id_categ' => $request->input('id_categ'),
            ]);
            return redirect()->route('blogs.index')->with('sucesso', 'o Post "' . $blog->titulo . '" foi atualizado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar atualizar o Post "' . $blog->titulo . '". Por favor, tente novamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        try {
            $blog->delete();
            return back()->with('sucesso', 'O Post "' . $blog->titulo . '" foi excluído com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar excluir o post "' . $blog->titulo . '". Por favor, tente novamente.');
        }
    }
}
