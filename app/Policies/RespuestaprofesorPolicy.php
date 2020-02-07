<?php

namespace App\Policies;

use App\Respuestaprofesor;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class RespuestaprofesorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any respuestaprofesors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the respuestaprofesor.
     *
     * @param  \App\User  $user
     * @param  \App\Respuestaprofesor  $respuestaprofesor
     * @return mixed
     */
    public function view(User $user, Respuestaprofesor $respuestaprofesor)
    {
        return true;
    }

    /**
     * Determine whether the user can create respuestaprofesors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isTutorGrupo()
            ? Response::allow()
            : Response::deny('No está autorizado para realizar esta acción');
    }

    /**
     * Determine whether the user can update the respuestaprofesor.
     *
     * @param  \App\User  $user
     * @param  \App\Respuestaprofesor  $respuestaprofesor
     * @return mixed
     */
    public function update(User $user, Respuestaprofesor $respuestaprofesor)
    {
        return $user->id === $respuestaprofesor->profesor
            ? Response::allow()
            : Response::deny('No está autorizado para realizar esta acción');
    }

    /**
     * Determine whether the user can delete the respuestaprofesor.
     *
     * @param  \App\User  $user
     * @param  \App\Respuestaprofesor  $respuestaprofesor
     * @return mixed
     */
    public function delete(User $user, Respuestaprofesor $respuestaprofesor)
    {
        return $user->id === $respuestaprofesor->profesor
            ? Response::allow()
            : Response::deny('No está autorizado para realizar esta acción');
    }

    /**
     * Determine whether the user can restore the respuestaprofesor.
     *
     * @param  \App\User  $user
     * @param  \App\Respuestaprofesor  $respuestaprofesor
     * @return mixed
     */
    public function restore(User $user, Respuestaprofesor $respuestaprofesor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the respuestaprofesor.
     *
     * @param  \App\User  $user
     * @param  \App\Respuestaprofesor  $respuestaprofesor
     * @return mixed
     */
    public function forceDelete(User $user, Respuestaprofesor $respuestaprofesor)
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
