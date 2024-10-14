<?php

namespace App\Models\Evento;

use App\Models\Funcionario\Funcionario;
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

    public function eventos()
    {
        return $this->belongsTo(User::class, 'id_us');
    }

    public function funcionarios()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }
}
