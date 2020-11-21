<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipoUpdateRequest extends FormRequest
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
        return ['estado' => 'max: 512', 
				'codigou' => 'min: 6|max: 8', 
				'descripcion' => 'max: 512',
				'serial' => 'max: 30'];
    }
}
