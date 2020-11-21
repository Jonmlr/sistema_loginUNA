<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAsignadoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
   public function rules()
    {
            return ['equipos_id' => 'unique:asignados'];
					
    }
	
	public function messages()
    {
        return [
			'equipos_id.unique' => 'El equipo ya ha sido asignado.',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
}
