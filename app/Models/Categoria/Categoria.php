<?php

namespace App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'familia',
        'descricao',
    ];
}
