<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:100',
			'lastname' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|max:15',
			'cedula' => 'required|min:7|max:10',
			'roles' => 'required',
			'lugar_id' => 'required'
        ];
    }
	
	public function messages()
    {
        return [
		    'lastname.required' => 'El campo apellido es obligatorio.',
            'email.email' => 'El email debe ser ejemplo@ejemplo.com/.com.ve/.net',
			'cedula.required' => 'El campo cédula es obligatorio.',
			'roles.required' => 'El campo rol es obligatorio.',
			'lugar_id.required' => 'El campo unidad administrativa es obligatorio.',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
}
