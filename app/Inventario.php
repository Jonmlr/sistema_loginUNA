<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = ['equipos_id', 'lugar_id', 'slug'];
	
    /**
	* Get the route key for the model.
	*, 
	* @return string
	*/
	
	public function getRouteKeyName()
	{
		return 'slug';
	} 	
}
