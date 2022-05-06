<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Movimiento;
use App\Tipo_Movimiento;
use App\Cuenta;
use Illuminate\Http\Request;
use App\Http\Requests\Movimiento\MovimientoRegistrarRequest;
use App\Http\Requests\Movimiento\MovimientoEditarRequest;
use Session;

class MovimientoController extends Controller
{
    public function create()
    {
        $tipos = Tipo_Movimiento::all();
        $cuentas = Cuenta::all();
        return view("movimiento.registro", compact('tipos','cuentas'));
    }

    public function index()
    {
        $movimientos = DB::table('realized_movements')
            ->join('movement_types','movement_types.id','=', 'realized_movements.type')
            ->select('realized_movements.*','movement_types.name as types')
            ->get();

        return view('movimiento.visualizar', compact('movimientos'));
    }

    public function store(MovimientoRegistrarRequest $request)
    {
        $data = $request->all();

        Movimiento::create([

            'account_id' => $data['account_id'],
            'movement_type_id' => $data['movement_type_id'],
            'credit_amount' => $data['credit_amount'],
            'debit_amount' => $data['debit_amount'],
            'description' => $data['description'],
            'future' => $data['future'],
            'm_date' => $data['m_date'],
        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('movimiento-visualizar')->with('success', 'Registro realizado exitosamente');
    }

    public function delete($id)
    {
        Movimiento::find($id)->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->route('movimiento-visualizar');
    }

    public function edit($id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $cuentas = Cuenta::all();
        $tipos = Tipo_Movimiento::all();

        return view('Movimiento.editar', compact('movimiento','cuentas','tipos'));

    }

    public function update(MovimientoEditarRequest $request, $id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->account_id = $request->account_id;
        $movimiento->movement_type_id = $request->movement_type_id;
        $movimiento->credit_amount = $request->credit_amount;
        $movimiento->debit_amount= $request->debit_amount;
        $movimiento->iva= $request->iva;
        $movimiento->description= $request->description;
        $movimiento->future= $request->future;
        $movimiento->m_date= $request->m_date;

        $movimiento->save();
        Session::flash('update','Se ha actualizado correctamente');
        return redirect()->route('movimiento-visualizar');
    }


}
