<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserUpdateRequest extends FormRequest
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
            'name' => 'max:100',
			'lastname' => 'max:100',
            'email' => 'email|max:255',
            'password' => 'nullable',
			'cedula' => 'min:7|max:10'
        ];
    }
	
	public function messages()
    {
        return [
            'email.email' => 'El email debe ser ejemplo@ejemplo.com/.com.ve/.net',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
}
