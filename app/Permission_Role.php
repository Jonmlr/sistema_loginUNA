<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Permission_Role extends Model
{
    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['permission_id', 'role_id'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permission_role';

    /**
     * Permissions can belong to many roles.
     *
     * @return Model
     */
   
}