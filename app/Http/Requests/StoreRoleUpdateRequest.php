<?php

namespace SistemaInventario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleUpdateRequest extends FormRequest
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
        return ['name' => 'max: 100',
			        'description' => 'nullable|max: 100'
        ];
    }
}
