<?php

namespace App\Models\Curso;

use App\Models\Categoria\Categoria;
use App\Models\Modulo\Modulo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'preco',
        'descricao',
        'data_inicio',
        'data_fim',
        'foto',
        'id_categ',
        'id_us'
    ];

    public function modulos()
    {
        return $this->hasMany(Modulo::class);
    }
    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'id_categ');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
}
