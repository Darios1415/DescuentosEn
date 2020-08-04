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
            'marca'=>'required|alpha_num',
            'nombre'=>'required|alpha_num',
            'app'=>'required|alpha',
            'apm'=>'required|alpha',
            'app'=>'required|alpha',
            'email'=>'required|email|unique:usuarios,email',
            'pass'=>'required|min:8',
            'telefono'=>'required|integer',
            'clabe'=>'required|integer',
            'colonia' =>'required',
            'calle' =>'required|alpha_num',
            'numint' =>'required|integer',
            'numext' =>'required',
            'cp' =>'required|integer',
            'logo' =>'required|image',
        ];
    }
    public function messages()
    {
       return[
        'Marca.required'=>'Marca es requerida ',
        'nombre.required'=>'Nombre es requerido',
        'nombre.alpha_num'=>'Nombre invalido',
        'app.required'=>'Apellido paterno es requerido',
        'app.alpha'=>'Apellido paterno invalido',
        'apm.required'=>'Apellido materno es requerido',
        'app.alpha'=>'Apellido materno invalido',
        'email.required'=>'correo electronico es requerido',
        'email.email'=>'correo electronico invalido',
        'email.unique'=>'El correo electronico ya se encuentra registrado',
        'pass.required'=>'contraseña requerida',
        'pass.min'=>'contraseña debe contener almenos 8 caracteres',
        'telefono.required'=>'Telefono es requerido',
        'telefono.integer'=>'Telefono invalido',
        'clabe.required'=>'Clabe interbancaria requerida',
        'clabe.integer'=>'Clabe interbancaria solo puede contener numeros',
        'colonia.required'=>'colonia requerida',
        'calle.required'=>'calle requerida',
        'calle.alpha_num'=>'Calle invalido solo puede contener letras y numeros',
        'numint.required'=>'numero de interior requerido',
        'numint.integer'=>'numero de interior invalido, solo puede contener numeros',
        'numext.required'=>'numero de exterior requerido',
        'cp.required'=>'codigo postal requerido',
        'cp.integer'=>'codigo postal invalido, solo puede contener numeros',
        'logo.required'=>'Imagen requerida',
    ];
    }
}
