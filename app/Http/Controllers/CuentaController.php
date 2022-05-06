<?php

namespace App\Http\Controllers;

use App\Cuenta;
use App\Http\Requests\Cuenta\CuentaRegistroRequest;
use App\Http\Requests\Cuenta\CuentaEditarRequest;
use Illuminate\Http\Request;
use Session;

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

    public function store(CuentaRegistroRequest $request)
    {
        $data = $request->all();

        Cuenta::create([

            'users_id' => $data['users_id'],
            'name' => $data['name'],
            'balance' => $data['saldo'],
        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('cuenta-visualizar');
    }
    public function delete($id)
    {
        Cuenta::find($id)->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->route('cuenta-visualizar');

    }

    public function edit($id)
    {
        $cuenta = Cuenta::findOrFail($id);

        return view('cuenta.editar', [

            'cuenta' => $cuenta,
        ]);

    }

    public function update(CuentaEditarRequest  $request, $id)
    {
        $cuenta = Cuenta::findOrFail($id);
        $cuenta->name = $request->name;
        $cuenta->balance = $request->saldo;

        $cuenta->save();
        Session::flash('update','Se ha actualizado correctamente');
        return redirect()->route('cuenta-visualizar');
    }

}
