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
            'nombre' =>'required|alpha_num|unique:subcategorias,nombre',
            'ruta' =>'required|image',
        ];
    }

    public function messages()
    {
        return[
        'idc.integer'=>'Seleccione la categoria',
        'nombre.required'=>'Subcategoria es requerida',
        'nombre.alpha_num'=>'Subcategoria solo puede contener letras y numeros',
        'nombre.unique'=>'Subcategoria ya se encuentra registrado',
        'ruta.required'=>'Imagen requerida',
        'ruta.image'=>'Imagen invalida',
        ];
    }
}
