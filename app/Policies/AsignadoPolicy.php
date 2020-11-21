<?php

namespace SistemaInventario\Policies;

use SistemaInventario\User;
use SistemaInventario\Equipo;
use SistemaInventario\Asignado;
use Illuminate\Auth\Access\HandlesAuthorization;

class AsignadoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
	
	public function pass(User $user, Equipo $equipo, Asignado $asignado)
    {
			return $user->id == $equipo->user_id;
    }
}
