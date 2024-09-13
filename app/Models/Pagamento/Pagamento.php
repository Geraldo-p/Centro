<?php

namespace App\Models\Pagamento;

use App\Models\Formando\Formando;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'comprovativo',
        'data_pagamento',
        'valor',
        'em_falta',
        'percentagem',
        'estado',
        'formando_id',
        'id_us'
    ];

    public function formandos()
    {
       return $this->belongsTo(Formando::class, 'formando_id');
    }

    public function users()
    {
       return $this->belongsTo(User::class, 'id_us');
    }
}
