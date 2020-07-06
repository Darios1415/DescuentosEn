<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionProveedor extends FormRequest
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
            'marca' =>'required',
            'nombre' =>'required|alpha',
            'app' =>'required|alpha',
            'apm' =>'required|alpha',
            'telefono' =>'required|integer|min:10',
            'clabe' =>'required',
            'colonia' =>'required|alpha',
            'numint' =>'required|integer',
            'numext' =>'required',
            'cp' =>'required|integer',
            'email' =>'required|unique:proveedor,email',
            'pass' =>'required|min:3|max:10',
        ];
    }
   /* public function messages()
    {
       return[
        'marca.required'=>'Nombre requerido',
        'nombre.required'=>'Nombre requerido',
        'app.required'=>'Apellido paterno requerido',
        'apm.required'=>'Apellido materno requerido',
        'telefono.required'=>'Telefono requerido',
        'clabe.required'=>'Seleccione clabe',
        'colonia.required'=>'colonia vacio',
        'numint.required'=>'numero de interior vacio',
        'numext.required'=>'numero de exterior vacio',
        'cp.required'=>'codigo postal vacio',
        'email.required'=>'correo electronico invalido',
        'pass.required'=>'contraseña requerida',
    ];
    }*/
}
