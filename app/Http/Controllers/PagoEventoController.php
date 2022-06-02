<?php

namespace App\Http\Controllers;

use App\Cuenta;
use App\Evento;
use App\Pago_Evento;
use Illuminate\Http\Request;

class PagoEventoController extends Controller
{


    public function create()

    {
        $eventos = Evento::all();
        $cuentas = Cuenta::all();
        return view("Pago_Evento.registro", compact('eventos','cuentas'));


    }

    public function index()
    {

        return view('Pago_evento.visualizar');

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Pago_Evento $pago_Evento)
    {
        //
    }


    public function edit(Pago_Evento $pago_Evento)
    {
        //
    }


    public function update(Request $request, Pago_Evento $pago_Evento)
    {
        //
    }


    public function destroy(Pago_Evento $pago_Evento)
    {
        //
    }
}
