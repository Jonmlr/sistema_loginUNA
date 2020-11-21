<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Movimientosequipo extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'slug'];
	
    /**
	* Get the route key for the model.
	*
	* @return string
	*/
	
	public function getRouteKeyName()
	{
		return 'slug';
	} 	
}
