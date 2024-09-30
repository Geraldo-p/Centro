<?php

namespace App\Models\Mensagens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagens extends Model
{
    use HasFactory;
    protected $fillable = [
        "descricao",
        "estado",
        "data_envio",
        "data_recebido",
        "recebido_por",
    ];
}
