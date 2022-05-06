<?php

namespace App\Http\Requests\Movimiento;

use Illuminate\Foundation\Http\FormRequest;

class MovimientoEditarRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'account_id'=> 'required|not_in:0',
            'movement_type_id' => 'required|not_in:0',
            'credit_amount' => 'required',
            'debit_amount' => 'required',
            'description' => 'required',
            'future' => 'required',
            'm_date' => 'required',


        ];

    }
    public function messages()
    {
        return [

            'account_id.required'=>'La Cuenta no debe estar vacio.',
            'movement_type_id.required'=>'El Tipo de Movimiento no debe estar vacio.',
            'credit_amount.required'=>'El Monto a Creditar no debe estar vacio.',
            'debit_amount.required'=>'El Monto a Debitar no debe estar vacio.',
            'description.required'=>'La Descripcion no debe estar vacio.',
            'future.required'=>'Selecione una Casilla.',
            'm_date.required'=>'La Fecha no debe estar vacio.',

            'account_id.not_in' => 'Seleccione una Cuenta',
            'movement_type_id.not_in' => 'Seleccione un Tipo de Movimiento',

        ];
    }

}
