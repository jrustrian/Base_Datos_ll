<?php

namespace App\Http\Controllers;

use App\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function create()
    {
        return view("cuenta.registrar");
    }

    public function index()
    {
        $cuentas = Cuenta::all();
        return view('cuenta.visualizar', compact('cuentas'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Cuenta::create([

            'users_id' => $data['users_id'],
            'name' => $data['name'],
            'balance' => $data['saldo'],
        ]);

        return redirect()->route('cuenta-visualizar')->with('success', 'Registro realizado exitosamente');
    }
    public function delete($id)
    {
        Cuenta::find($id)->delete();
        return redirect()->route('cuenta-visualizar');
    }

    public function edit($id)
    {
        $cuenta = Cuenta::findOrFail($id);

        return view('cuenta.editar', [

            'cuenta' => $cuenta,
        ]);

    }

    public function update(Request $request, $id)
    {
        $cuenta = Cuenta::findOrFail($id);
        $cuenta->name = $request->name;
        $cuenta->balance = $request->saldo;

        $cuenta->save();
        return redirect()->route('cuenta-visualizar');
    }

}
