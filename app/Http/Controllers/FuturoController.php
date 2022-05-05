<?php

namespace App\Http\Controllers;

use App\Futuro;
use App\Cuenta;
use App\Tipo_Movimiento;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FuturoController extends Controller
{


    public function index()
    {
        $futuros = DB::table('future_movements')

            ->join('movement_types','movement_types.id','=', 'future_movements.type')
            ->select('future_movements.*','accounts.name as accounts','movement_types.name as types')
            ->select('future_movements.*','movement_types.name as types')
            ->get();

        return view('futuro.visualizar', compact('futuros'));
    }


}
