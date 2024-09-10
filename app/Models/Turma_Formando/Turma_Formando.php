<?php

namespace App\Models\Turma_Formando;

use App\Models\Formando\Formando;
use App\Models\Turma\Turma;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma_Formando extends Model
{
    use HasFactory;
    protected $fillable = [
        "turma_id",
        "formando_id",
        "id_us",
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
    public function formandos()
    {
        return $this->belongsTo(Formando::class, 'formando_id');
    }
    public function turmas()
    {
        return $this->belongsTo(Turma::class, 'turma_id');
    }
}
