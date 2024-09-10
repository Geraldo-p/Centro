<?php

namespace App\Models\Formando;

use App\Models\Contacto\Contacto;
use App\Models\Endereco\Endereco;
use App\Models\Turma_Formando\Turma_Formando;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formando extends Model
{
    use HasFactory;
    protected $fillable = [
        "nome",
        "genero",
        "data_nascimento",
        "estado_civil",
        "nacionalidade",
        "provincia",
        "municipio",
        "bi",

        "instituicao",
        "nivel_escolaridade",
        "curso",
        "periodo",
        "situacao",

        "foto",
        "contacto_id",
        "endereco_id",
        "id_us",
    ];

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
    public function turma_formandos()
    {
        return $this->hasMany(Turma_Formando::class, 'formando_id');
    }
}
