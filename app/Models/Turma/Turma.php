<?php

namespace App\Models\Turma;

use App\Models\Funcionario\Funcionario;
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
        "id_us",
    ];
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
