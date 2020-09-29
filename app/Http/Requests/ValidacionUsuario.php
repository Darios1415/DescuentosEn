<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuario extends FormRequest
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
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'pass' => ['required', 'string', 'min:8', 'confirmed'],
            'telefono' => ['required', 'numeric'],
        ];
    }


    public function messages()
    {
       return[
        'nombre.required'=>'Nombre es requerido',
        'nombre.alpha_num'=>'Nombre invalido',
        'email.required'=>'correo electronico es requerido',
        'email.email'=>'correo electronico invalido',
        'email.unique'=>'El correo electronico ya se encuentra registrado',
        'pass.required'=>'contraseña requerida',
        'pass.min'=>'contraseña debe contener almenos 8 caracteres',
        'pass.confirmed'=>'La confirmacion de Contraseña no coinciden',
        'telefono.required'=>'Telefono es requerido',
        'telefono.integer'=>'Telefono invalido',
    ];
}
}
