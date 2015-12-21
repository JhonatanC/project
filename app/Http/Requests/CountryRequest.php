<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CountryRequest extends Request
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
            'country' => 'required|unique:countries'
        ];
    }

    /**
     * @return array
     */

    public function messages()
    {
        return [
            'country.required' => 'Por favor ingresa el nombre de una país',
            'country.unique' => 'Ya existe un país con este nombre'
        ];
    }
}
