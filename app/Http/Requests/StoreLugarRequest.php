<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLugarRequest extends FormRequest
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
        return ['nombre' => 'required|max: 100', 
				'direccion' => 'required|max: 512', 
				'descripcion' => 'max: 512', 
				'telefono' => 'required|min:11|phone'];
    }
	
	public function messages()
    {
        return [
            'direccion.required' => 'El campo dirección es obligatorio.',
			'telefono.required' => 'El campo teléfono es obligatorio.',
			'telefono.min' => 'El campo teléfono debe ser de 11 caracteres.',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
}
