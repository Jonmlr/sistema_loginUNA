<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['role_id', 'user_id'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'role_user';

    /**
     * Permissions can belong to many roles.
     *
     * @return Model
     */
   
}