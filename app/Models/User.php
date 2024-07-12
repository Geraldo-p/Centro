<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Categoria\Categoria;
use App\Models\Departamento\departamento;
use App\Models\Modulo\Modulo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Categoria\Curso;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function categorias()
    {
        return $this->hasMany(Categoria::class, 'id_us');
    }

    public function departamentos()
    {
        return $this->hasMany(departamento::class, 'id_us');
    }

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_us');
    }

    public function modulos()
    {
        return $this->hasMany(Modulo::class, 'id_us');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
