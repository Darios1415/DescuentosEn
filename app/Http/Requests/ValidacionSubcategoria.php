<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionSubcategoria extends FormRequest
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
            'idc' => 'required|integer|not_in:0',
            'nombre' =>'required|alpha|unique:subcategorias,nombre'
        ];
    }

    public function messages()
    {
       return[
        'idc.required'=>'Seleccione la categoria',
        'nombre.required'=>'Subcategoria requerida'
       ];
    }
}
