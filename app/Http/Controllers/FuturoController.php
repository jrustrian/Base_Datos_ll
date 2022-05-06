<?php

namespace App\Http\Controllers;

use App\Futuro;
use App\Cuenta;
use App\Tipo_Movimiento;
use App\Movimiento;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\Movimiento\MovimientoEditarRequest;
use Session;

class FuturoController extends Controller
{


    public function index()
    {
        $futuros = DB::table('future_movements')

            ->join('movement_types','movement_types.id','=', 'future_movements.type')
            ->select('future_movements.*','movement_types.name as types')
            ->get();

        return view('futuro.visualizar', compact('futuros'));
    }
    public function delete($id)
    {
        Futuro::find($id)->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->route('futuro-visualizar');
    }

    public function edit($id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $cuentas = Cuenta::all();
        $tipos = Tipo_Movimiento::all();

        return view('futuro.editar', compact('movimiento','cuentas','tipos'));

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
        return redirect()->route('futuro-visualizar');
    }

}
