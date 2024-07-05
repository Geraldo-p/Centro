<?php

namespace App\Models\Contacto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'telefone',
        'telefoneOP',
        'watsapp',
        'outros',
    ];
}
