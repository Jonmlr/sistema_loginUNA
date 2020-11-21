<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Roleusuario extends Model
{
      protected $fillable = ['role_id', 'user_id', 'slug'];
	
    /**
	* Get the route key for the model.
	*, 
	* @return string
	*/
	
	protected $table = 'roleusuario';
	
	public function getRouteKeyName()
	{
		return 'slug';
	} 	
}
