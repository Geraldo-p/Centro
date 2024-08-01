<?php

namespace App\Models\Contacto;

use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
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

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'contacto_id');
    }
    public function formandos()
    {
        return $this->hasMany(Formando::class, 'contacto_id');
    }
}
