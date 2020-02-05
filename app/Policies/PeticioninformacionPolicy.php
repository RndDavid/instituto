<?php

namespace App\Policies;

use App\Peticioninformacion;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeticioninformacionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any peticioninformacions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the peticioninformacion.
     *
     * @param  \App\User  $user
     * @param  \App\Peticioninformacion  $peticioninformacion
     * @return mixed
     */
    public function view(User $user, Peticioninformacion $peticioninformacion)
    {
        return true;
    }

    /**
     * Determine whether the user can create peticioninformacions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the peticioninformacion.
     *
     * @param  \App\User  $user
     * @param  \App\Peticioninformacion  $peticioninformacion
     * @return mixed
     */
    public function update(User $user, Peticioninformacion $peticioninformacion)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the peticioninformacion.
     *
     * @param  \App\User  $user
     * @param  \App\Peticioninformacion  $peticioninformacion
     * @return mixed
     */
    public function delete(User $user, Peticioninformacion $peticioninformacion)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the peticioninformacion.
     *
     * @param  \App\User  $user
     * @param  \App\Peticioninformacion  $peticioninformacion
     * @return mixed
     */
    public function restore(User $user, Peticioninformacion $peticioninformacion)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the peticioninformacion.
     *
     * @param  \App\User  $user
     * @param  \App\Peticioninformacion  $peticioninformacion
     * @return mixed
     */
    public function forceDelete(User $user, Peticioninformacion $peticioninformacion)
    {
        //
    }

    public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }
}
