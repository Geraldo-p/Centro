<?php

namespace App\Models\Comentario;

use App\Models\Blog\Blog;
use App\Models\Evento\Evento;
use App\Models\Funcionario\Funcionario;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $fillable = [
        'comentario',
        'blog_id',
        'evento_id',
        'id_us',

    ];

    public function posts()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
    public function eventos()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }
}
