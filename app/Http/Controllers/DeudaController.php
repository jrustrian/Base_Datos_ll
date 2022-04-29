<?php

namespace App\Http\Controllers;

use App\Deuda;
use Illuminate\Http\Request;



class DeudaController extends Controller
{


    public function create()
    {
        return view("deuda.registro");
    }

    public function index()
    {
        $deudas = Deuda::all();
        return view('deuda.visualizar', compact('deudas'));
    }

        public function store(Request $request)
    {
        $data = $request->all();

        Deuda::create([

            'users_id' => $data['users_id'],
        'name' => $data['name'],
        'description' => $data['description'],
        'amount' => $data['amount'],
        'monthly_fee' => $data['monthly_fee'],
    ]);

        return redirect()->route('deuda-visualizar')->with('success', 'Registro realizado exitosamente');
    }


    public function delete($id)
    {
        Deuda::find($id)->delete();
        return redirect()->route('deuda-visualizar');
    }

    public function edit($id)
    {
       $deuda = Deuda::findOrFail($id);

       return view('deuda.editar', [

           'deuda' => $deuda,
       ]);

    }

    public function update(Request $request, $id)
    {
        $deuda = Deuda::findOrFail($id);
        $deuda->name = $request->name;
        $deuda->description = $request->description;
        $deuda->amount = $request->amount;
        $deuda->monthly_fee= $request->monthly_fee;

        $deuda->save();
        return redirect()->route('deuda-visualizar');
    }



}
