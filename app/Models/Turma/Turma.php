<?php

namespace App\Models\Turma;

use App\Models\Curso\Curso;
use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
use App\Models\Matricula\Matricula;
use App\Models\Sala\Sala;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    protected $fillable = [
        "nome",
        "sala_id",
        "funcionario_id",
        "horario_ENTRADA",
        "horario_SAIDA",
        "status",
        "curso_id",
        "id_us",
    ];
    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'turma_id');
    }
    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    
    public function formandos()
    {
        return $this->belongsToMany(Formando::class, 'turma__formandos', 'turma_id', 'formando_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
    public function funcionarios()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

    public function salas()
    {
        return $this->belongsTo(Sala::class, 'sala_id');
    }
}
