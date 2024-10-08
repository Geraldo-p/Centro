<?php

namespace App\Models\Categoria;

use App\Models\Blog\Blog;
use App\Models\Curso\Curso;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome',
        'familia',
        'descricao',
        'id_us'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_categ');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'id_categ');
    }
}
