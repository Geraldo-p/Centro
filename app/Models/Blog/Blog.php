<?php

namespace App\Models\Blog;

use App\Models\Categoria\Categoria;
use App\Models\Comentario\Comentario;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        "titulo",
        "resumo",
        "conteudo",
        "imagem",
        "data_publicacao",
        "view",
        'id_us',
        'id_categ',
    ];
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, "blog_id");
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'id_categ');
    }
}
