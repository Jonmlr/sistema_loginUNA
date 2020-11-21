<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLugarUpdateRequest extends FormRequest
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
        return ['nombre' => 'max: 100|unique:marcasequipos|required', 
				'direccion' => 'max: 512', 
				'descripcion' => 'max: 512', 
				'telefono' => 'min:11|phone'];
    }
	
	public function messages()
    {
        return [
			'telefono.min' => 'El campo teléfono debe ser de 11 caracteres.',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
}
