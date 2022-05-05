<?php

namespace App\Http\Controllers;

use App\Abono;
use App\Cuenta;
use App\Deuda;
use Illuminate\Http\Request;

class AbonoController extends Controller
{

    public function index()
    {


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
        //
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
