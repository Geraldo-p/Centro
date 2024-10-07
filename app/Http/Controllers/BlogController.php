<?php

namespace App\Http\Controllers;

use App\Models\Blog\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Tag;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Blog::orderBy("titulo")->get();
        return view("layouts user.Blog.index", compact("posts"));
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
        return view("layouts user.Blog.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        try {
            //code...

            $image_name = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path("images"), $image_name);
            }

            $post = Blog::create([
                'imagem' => $image_name,
                'id_us' => Auth::id(),
            ] + $request->all());

            // Criar ou buscar as tags e associá-las à postagem
            $tags = collect(explode(',', $request->tags))->map(function ($tag) {
                return Tag::firstOrCreate(attributes: ['nome' => trim($tag)]);
            });

            $post->tags()->sync($tags->pluck('id'));

            return back()->with('sucesso', 'Post Criado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Ocorreu um problema ao tentar criar o post');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view("layouts user.Blog.show", compact("blog"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view("layouts user.Blog.edit", compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        try {
            $blog->update($request->all());
            return redirect()->route('salas.index')->with('sucesso', 'o Post "' . $blog->titulo . '" foi atualizado com sucesso.');
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
