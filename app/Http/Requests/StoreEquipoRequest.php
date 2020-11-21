<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipoRequest extends FormRequest
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
        return ['tiposequipos_id' => 'required', 
				'marcasequipos_id' => 'required',
				'lugar_id' => 'required',
				'estado' => 'required|max: 512', 
				'codigou' => 'required|min: 6|max: 8',
				'serial' => 'required|max: 30', 
				'descripcion' => 'required|max: 512',
				'observaciones' => 'max: 512']
				;
    }
	
	public function messages()
    {
        return [
            'tiposequipos_id.required' => 'El campo tipo de equipo es obligatorio.',
			'marcasequipos_id.required' => 'El campo marca de equipo es obligatorio.',
			'lugar_id.required' => 'El campo unidad administrativa es obligatorio.',
			'codigou.required' => 'El campo código una es obligatorio.',
		    'descripcion.required' => 'El campo descripción es obligatorio.',
			'serial.required' => 'El campo serial físico es obligatorio.',
        ];
    
	
	$this->validate($request, $rules, $messages);
	}
    
}
