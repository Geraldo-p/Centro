<?php

namespace App\Models\Evento;

use App\Models\Comentario\Comentario;
use App\Models\Curso\Curso;
use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
use App\Models\Turma\Turma;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'resumo',
        'data_inicio',
        'data_fim',
        'local',
        'imagem',
        'tipo_evento',
        'temas',
        'status',
        'capacidade',
        'custo',
        'id_us',
        'funcionario_id',
    ];
    public function formandos()
{
    return $this->belongsToMany(Formando::class, 'evento_formando');
}

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'evento_id');
    }
    public function cursos()
{
    return $this->hasManyThrough(Curso::class, Turma::class, 'funcionario_id', 'id', 'id', 'curso_id');
}
    public function eventos()
    {
        return $this->belongsTo(User::class, 'id_us');
    }

    public function funcionarios()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }
}
