<?php

namespace App\Models\Endereco;

use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable = [
        'rua',
        'bairro',
        'provincia',
        'municipio',
        'pais',
        'enderecoDetalhado'
    ];

        public function funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'endereco_id');
    }

    public function formandos()
    {
        return $this->hasMany(Formando::class, 'endereco_id');
    }
}
