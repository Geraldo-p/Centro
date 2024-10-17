<?php

namespace App\Models\Funcionario;

use App\Models\Contacto\Contacto;
use App\Models\Curso\Curso;
use App\Models\Departamento\departamento;
use App\Models\Endereco\Endereco;
use App\Models\Evento\Evento;
use App\Models\Turma\Turma;
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

    public function cursos()
{
    return $this->hasManyThrough(Curso::class, Turma::class, 'funcionario_id', 'id', 'id', 'curso_id');
}

    public function formadors()
    {
        return $this->hasMany(Funcionario::class, 'formador_id');
    }
    public function departamentos()
    {
        return $this->belongsTo(departamento::class, 'departamento_id');
    }
    public function turmas()
    {
        return $this->hasMany(Turma::class, 'funcionario_id');
    }
    public function Evento()
    {
        return $this->hasMany(Evento::class, 'funcionario_id');
    }
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
