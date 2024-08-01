<?php

namespace App\Models\Sala;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    protected $fillable = [
        "descricao",
        "capacidade",
        "tipo",
        "id_us"
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'id_us');
    }
}
