<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $fillable = ['nombre', 'direccion', 'descripcion', 'telefono', 'slug'];
	
    /**
	* Get the route key for the model.
	*, 'codigou'
	* @return string
	*/
	
	public function getRouteKeyName()
	{
		return 'slug';
	} 	
}
