<?php

namespace App\Models\Formando;

use App\Models\Contacto\Contacto;
use App\Models\Endereco\Endereco;
use App\Models\Evento\Evento;
use App\Models\Lista_de_Presenca\Lista_Presenca;
use App\Models\Matricula\Matricula;
use App\Models\Pagamento\Pagamento;
use App\Models\Turma\Turma;
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
        "num_formando",
        "contacto_id",
        "endereco_id",
        "id_us",
    ];

    public function eventos()
{
    return $this->belongsToMany(Evento::class, 'evento_formando');
}
    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class, 'formando_id');
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

    public function lista_presencas()
    {
        return $this->hasMany(Lista_Presenca::class, 'formando_id');
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'formando_id');
    }

    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'matriculas', 'formando_id', 'turma_id');
    }
}
