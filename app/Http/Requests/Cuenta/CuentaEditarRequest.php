<?php

namespace App\Http\Requests\Cuenta;

use Illuminate\Foundation\Http\FormRequest;

class CuentaEditarRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=> 'required|unique:accounts,name',
            'saldo' => 'required',
        ];

    }
    public function messages()
    {
        return [

            'name.required'=>'El Nombre de la Cuenta no debe estar vacio.',
            'saldo.required'=>'El Balance no debe estar vacio.',
            'name.unique'=>'El Nombre de la Cuenta ya Existe.',

        ];
    }
}
