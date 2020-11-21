<?php

namespace SistemaInventario;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	public function users()
		{
			return $this->belongsToMany('SistemaInventario\User');
		}

	protected $fillable = [
        'name', 'slug', 'description',
    ];
}