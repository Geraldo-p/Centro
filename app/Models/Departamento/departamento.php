<?php

namespace App\Models\Departamento;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    use HasFactory;
    protected $fillable = [
        "nome",
        "descricao",
        "hora_entrada",
        "hora_fechamento",
        "id_us",
    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
}
