<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarcaEquipoRequest extends FormRequest
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
        return ['nombre' => 'max: 100|unique:marcasequipos', 
				'modelo' => 'max: 30'];
    }
	
	public function messages()
    {
        return [
            'nombre.unique' => 'La marca de equipo ya existe.',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
	
}
