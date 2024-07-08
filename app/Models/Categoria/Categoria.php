<?php

namespace App\Models\Categoria;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome',
        'familia',
        'descricao',
        'id_us'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
