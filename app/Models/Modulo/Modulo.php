<?php

namespace App\Models\Modulo;

use App\Models\Curso\Curso;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'curso_id',
        'nome',
        'descricao',
        'data_inicio',
        'data_fim',
        'qtd_licoes',
    ];

    public function cursos()
    {
        return $this->belongsTo(Curso::class);
    }
}
