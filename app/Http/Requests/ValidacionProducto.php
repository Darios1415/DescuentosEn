<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionProducto extends FormRequest
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
            'nombre' =>'required|alpha_num',
            'descripcion' =>'required',
            'precio' =>'required|numeric',
            'comision' =>'required|numeric',
            'existencia' =>'required|numeric',
            'descc' =>'required|numeric',
            'descp' =>'required|numeric',
            'cost_env' =>'required|numeric',
            'idc' =>'required|not_in:0|integer',
            'idsc' =>'required|not_in:0|integer',
            'img' =>'required|image',
        ];
    }

    public function messages()
    {
        return[
        'nombre.required'=>'Nombre es requerido',
        'nombre.alpha_num'=>'Nombre invalido',
        'descripcion.required'=>'Descripcion es requerido',
        'precio.required'=>'Precio es requerido',
        'precio.numeric'=>'Precio invalido',
        'comision.numeric'=>'Comision invalido',
        'comision.required'=>'Comision es requerido',
        'existencia.numeric'=>'nuemro de existencias invalido',
        'existencia.required'=>' nuemro de existencias es requerido',
        'descc.numeric'=>'Descuento al cliente invalido',
        'descc.required'=>'Descuento al cliente es requerido',
        'descp.numeric'=>'Descuento al proveedor es invalido',
        'descp.required'=>'Descuento al proveedor es requerido',
        'cost_env.numeric'=>'Costo de envio es invalido',
        'cost_env.required'=>'Costo de envio es requerido',
        'idc.integer'=>'Seleccione una categoria',
        'idsc.integer'=>'Seleccione una subcategoria',
        'img.required'=>'Imagen requerida',
       ];
    }
}
