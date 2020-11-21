<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTipoequipoRequest extends FormRequest
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
        return ['nombre' => 'required|max: 100|unique:tiposequipos'];
    }
	
	public function messages()
    {
        return [
            'nombre.unique' => 'El tipo de equipo ya existe.',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
}
