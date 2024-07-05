<?php

namespace App\Models\Curso;

use App\Models\Modulo\Modulo;
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
    ];

    public function modulos()
{
    return $this->hasMany(Modulo::class);
}
}
