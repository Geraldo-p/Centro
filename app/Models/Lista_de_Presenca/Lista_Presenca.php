<?php

namespace App\Models\Lista_de_Presenca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista_Presenca extends Model
{
    use HasFactory;
    protected $fillable = [
        "data_presenca",
        "presenca",
        "modulo_id",
        "formando_id",
        "id_us"
    ];
}
