<?php

namespace App\Policies;

use App\Models\Lista_de_Presenca\Lista_Presenca;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ListaPresencaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Lista_Presenca $listaPresenca): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Lista_Presenca $listaPresenca): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Lista_Presenca $listaPresenca): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Lista_Presenca $listaPresenca): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Lista_Presenca $listaPresenca): bool
    {
        //
    }
}
