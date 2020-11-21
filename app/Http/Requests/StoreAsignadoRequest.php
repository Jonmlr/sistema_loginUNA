<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAsignadoRequest extends FormRequest
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
            return ['equipos_id' => 'required|unique:asignados',
					'user_id' => 'required'];
					
    }
	
	public function messages()
    {
        return [
			'equipos_id.required' => 'El campo equipos es obligatorio.',
			'equipos_id.unique' => 'El equipo ya ha sido asignado.',
			'user_id.required' => 'El campo usuarios es obligatorio.',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
}