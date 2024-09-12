<?php

namespace App\Models\Modulo;

use App\Models\Curso\Curso;
use App\Models\Lista_de_Presenca\Lista_Presenca;
use App\Models\Lista_de_Presenca_Principal\Lista_Presenca_Principal;
use App\Models\User;
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
        'id_us',
    ];

    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }

    public function lista_presencas()
    {
        return $this->hasMany(Lista_Presenca_Principal::class, 'modulo_id');
    }
}
