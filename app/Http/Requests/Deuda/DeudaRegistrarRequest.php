<?php

namespace App\Http\Requests\Deuda;

use Illuminate\Foundation\Http\FormRequest;

class DeudaRegistrarRequest extends FormRequest
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
            'description' => 'required',
            'monthly_fee' => 'required',
            'amount' => 'required',

        ];

    }
    public function messages()
    {
        return [
            'users_id.required'=>'El Usuario no debe estar vacio.',
            'name.required'=>'El Nombre de la Deuda no debe estar vacio.',

            'description.required'=>'La Description no debe estar vacio.',
            'amount.required'=>'El Monto no debe estar vacio.',
            'monthly_fee.required'=>'Las Cuotas Mensuales no debe estar vacio.',

            'name.unique'=>'El Nombre de la Deuda ya Existe.',

        ];
    }

}
