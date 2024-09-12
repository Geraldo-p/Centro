<?php

namespace App\Models\Lista_de_Presenca;

use App\Models\Formando\Formando;
use App\Models\Lista_de_Presenca_Principal\Lista_Presenca_Principal;
use App\Models\Modulo\Modulo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista_Presenca extends Model
{
    use HasFactory;
    protected $fillable = [
        "presenca",
        "formando_id",
        "lista_id",
        "id_us",
    ];

    public function formandos()
    {
        return $this->belongsTo(Formando::class, 'formando_id');
    }

    public function lista_presenca_principals()
    {
        return $this->belongsTo(Lista_Presenca_Principal::class, 'lista_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }

}
