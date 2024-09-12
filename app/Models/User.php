<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Categoria\Categoria;
use App\Models\Departamento\departamento;
use App\Models\Formando\Formando;
use App\Models\Funcionario\Funcionario;
use App\Models\Modulo\Modulo;
use App\Models\Sala\Sala;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Categoria\Curso;
use App\Models\Lista_de_Presenca\Lista_Presenca;
use App\Models\Lista_de_Presenca_Principal\Lista_Presenca_Principal;

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
    public function lista_presencas()
    {
        return $this->hasMany(Lista_Presenca::class, 'id_us');
    }
    public function lista_presencas_principals()
    {
        return $this->hasMany(Lista_Presenca_Principal::class, 'id_us');
    }
    public function formandos()
    {
        return $this->hasMany(Formando::class, 'id_us');
    }
    public function salas()
    {
        return $this->hasMany(Sala::class, 'id_us');
    }

    public function departamentos()
    {
        return $this->hasMany(departamento::class, 'id_us');
    }
    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'id_us');
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
