<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Tiposequipo extends Model
{
	public function tiposequipo(){
        return $this->belongsTo('SistemaInventario\Equipo','tiposequipos_id');
    }
	
	
    protected $fillable = ['nombre', 'slug'];
	
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
