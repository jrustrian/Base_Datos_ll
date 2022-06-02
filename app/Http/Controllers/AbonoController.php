<?php

namespace App\Http\Controllers;

use App\Abono;
use App\Cuenta;
use App\Deuda;
use Illuminate\Http\Request;
use DB;
use Session;


class AbonoController extends Controller
{

    public function index()
    {

        return view('.visualizar');

    }

    public function create()
    {
        {
            $deudas = Deuda::all();
            $cuentas = Cuenta::all();
            return view("abono.registrar", compact('deudas','cuentas'));
        }
    }


    public function store(Request $request)
    {
        $data = $request->all();

            DB::raw("execute debt_payment_prc (:v_debt_id, :v_account_id, :v_payment_amount, :v_future, :v_date  )");
            ['v_debt_id' => $data['v_debt_id'], 'v_account_id' => $data['v_account_id'],
                'v_payment_amount' => $data['v_payment_amount'], 'v_future' => $data['v_future'],
                'v_date' => $data['v_date']
            ];
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('abono-agregar');
}

    public function show(Abono $abono)
    {
        //
    }


    public function edit(Abono $abono)
    {
        //
    }


    public function update(Request $request, Abono $abono)
    {
        //
    }


    public function destroy(Abono $abono)
    {
        //
    }
}
