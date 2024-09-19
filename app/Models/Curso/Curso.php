<?php

namespace App\Models\Curso;

use App\Models\Categoria\Categoria;
use App\Models\Modulo\Modulo;
use App\Models\Pagamento\Pagamento;
use App\Models\Turma\Turma;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'duracao',
        'foto',
        'preco',
        'pag_mes',
        'data_inicio',
        'data_fim',
        'descricao',
        'id_us',
        'id_categ',
    ];
    public function turmas()
    {
        return $this->hasMany(Turma::class, 'curso_id');
    }
    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class, 'curso_id');
    }
    public function modulos()
    {
        return $this->hasMany(Modulo::class, 'curso_id');
    }
    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'id_categ');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
}
