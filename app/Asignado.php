<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Asignado extends Model
{
     protected $fillable = ['equipos_id', 'user_id'];
	
    /**
	* Get the route key for the model.
	*, 
	* @return string
	*/
	
	public function getRouteKeyName()
	{
		return 'id';
	} 	
}