<?php

namespace App\Http\Controllers;

use App\Tipo_Movimiento;
use Illuminate\Http\Request;

class TipoMovimientoController extends Controller
{
    public function create()
    {
        return view("tipo_movimiento.registro");
    }

    public function index()
    {
        $tipos = Tipo_Movimiento::all();
        return view('tipo_movimiento.visualizar', compact('tipos'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Tipo_Movimiento::create([

            'name' => $data['name'],
        ]);

        return redirect()->route('tipo-visualizar')->with('success', 'Registro realizado exitosamente');
    }

    public function delete($id)
    {
        Tipo_Movimiento::find($id)->delete();
        return redirect()->route('tipo-visualizar');
    }

    public function edit($id)
    {
        $tipo = Tipo_Movimiento::find($id);

        return view('tipo_movimiento.editar', compact('tipo'));
    }






}
