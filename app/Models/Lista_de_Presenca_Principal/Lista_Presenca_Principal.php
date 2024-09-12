<?php

namespace App\Models\Lista_de_Presenca_Principal;

use App\Models\Lista_de_Presenca\Lista_Presenca;
use App\Models\Modulo\Modulo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista_Presenca_Principal extends Model
{
    use HasFactory;
    protected $fillable = [
        "data_presenca",
        "aula_nome",
        'modulo_id',
        "id_us"
    ];

    public function modulos()
    {
        return $this->belongsTo(Modulo::class, 'modulo_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }

    public function lista_presencas()
    {
        return $this->hasMany(Lista_Presenca::class, 'lista_id');
    }
}
