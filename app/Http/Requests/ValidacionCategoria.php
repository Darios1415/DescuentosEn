<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCategoria extends FormRequest
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
            'nombre' =>'required|alpha_num|unique:categorias,nombre',
            'ruta' =>'required|image',
        ];
    }

    public function messages()
    {
        return[
        'nombre.required'=>'Categoria es requerida',
        'ruta.required'=>'Imagen requerida',
        'ruta.image'=>'Imagen invalida',
        ];
    }

}
