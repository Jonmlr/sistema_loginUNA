<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
	

	
    protected $fillable = ['lugar_id', 'tiposequipos_id', 'marcasequipos_id', 'estado', 'serial', 'codigou', 'descripcion', 'observaciones', 'slug'];
	
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
