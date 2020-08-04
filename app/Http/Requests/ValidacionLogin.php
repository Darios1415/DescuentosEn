<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionLogin extends FormRequest
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
            'email'=>'email|required|string',
            'pass'=>'required|string'
        ];
    }

    public function messages()
    {
        return[
        'email.required'=>'el correo electronico es requerido',
        'pass.required'=>'contraseña requerida',
        ];
    }
}
