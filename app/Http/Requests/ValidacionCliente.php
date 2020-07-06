<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCliente extends FormRequest
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
            'nombre' =>'required|alpha',
            'app' =>'required|alpha',
            'apm' =>'required|alpha',
            'email' =>'required|email|unique:cliente,email',
            'pass' =>'required|min:3|max:10',
            'telefono' =>'required|min:10|max:10',
            'idm' =>'required|not_in:0',
            'colonia' =>'required|alpha',
            'calle' =>'required',
            'numint' =>'required|integer',
            'numext' =>'required',
            'cp' =>'required|integer',
        ];
    }
  /*  public function messages()
    {
       return[
        'nombre.required'=>'Nombre requerido',
        'app.required'=>'Apellido paterno requerido',
        'apm.required'=>'Apellido materno requerido',
        'email.required'=>'correo electronico invalido',
        'pass.required'=>'contraseña requerida',
        'telefono.required'=>'Telefono requerido',
        'idm.required'=>'Seleccione municipio',
        'colonia.required'=>'colonia vacio',
        'calle.required'=>'calle vacio',
        'numint.required'=>'numero de interior vacio',
        'numext.required'=>'numero de exterior vacio',
        'cp.required'=>'codigo postal vacio'
       ];
    }*/
}
