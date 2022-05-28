<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Session;

class EventoController extends Controller
{

    public function create()
    {
        return view("evento.registrar");
    }

    public function index()
    {
        $eventos = Evento::all();
        return view('evento.visualizar', compact('eventos'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Evento::create([

            'users_id' => $data['users_id'],
            'name' => $data['name'],
            'balance' => $data['balance'],
            'needed_balance' => $data['needed_balance'],
        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('evento-visualizar');
    }


    public function delete($id)
    {
        Evento::find($id)->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->route('evento-visualizar');

    }

    public function edit($id)
    {
        $evento = Evento::findOrFail($id);

        return view('evento.editar', [

            'evento' => $evento,
        ]);

    }

    public function update(Request  $request, $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->name = $request->name;
        $evento->balance = $request->balance;
        $evento->needed_balance = $request->needed_balance;

        $evento->save();
        Session::flash('update','Se ha actualizado correctamente');
        return redirect()->route('evento-visualizar');
    }
}
