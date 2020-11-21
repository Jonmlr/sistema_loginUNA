<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Marcasequipo extends Model
{
    protected $fillable = ['nombre', 'modelo', 'slug'];
	
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
