<?php

namespace App\Models\Funcionario;

use App\Models\Contacto\Contacto;
use App\Models\Departamento\departamento;
use App\Models\Endereco\Endereco;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'genero',
        'data_nascimento',
        'estado_civil',
        'nacionalidade',
        'provincia',
        'municipio',
        'bi',
        'cargo',
        'salario',
        'data_contratacao',
        'foto',
        'nivel_escolaridade',
        'linguas',
        'nome_banco',
        'num_conta_banco',
        'iban',
        'status',
        'documento',
        'departamento_id',
        'contacto_id',
        'endereco_id',
        'id_us',
    ];
    public function departamentos()
    {
        return $this->belongsTo(departamento::class, 'departamento_id');
    }
    // public function funcionarios()
    // {
    //     return $this->hasMany(Funcionario::class, 'endereco_id');
    // }
    public function contactos()
    {
        return $this->belongsTo(Contacto::class, 'contacto_id');
    }
    public function enderecos()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
}
