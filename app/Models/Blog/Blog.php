<?php

namespace App\Models\Blog;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'resumo',
        'conteudo',
        'imagem',
        'data_publicacao',
        'id_us',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
