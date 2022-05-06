<?php

namespace App\Http\Requests\Cuenta;

use Illuminate\Foundation\Http\FormRequest;

class CuentaRegistroRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'users_id' => 'required',
            'name'=> 'required|unique:accounts,name',
            'saldo' => 'required',
        ];

    }
    public function messages()
    {
        return [
            'users_id.required' => 'El campo usuario es obligatorio',
            'name.required'=>'El campo Nombre de la Cuenta no debe estar vacio.',
            'saldo.required'=>'El campo Balance no debe estar vacio.',
            'name.unique'=>'El campo Nombre de la Cuenta ya Existe.',

        ];
    }
}
