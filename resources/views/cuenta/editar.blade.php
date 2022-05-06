@extends('layouts.app')

@section('content')
    @include('mensajes.messages')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('cuenta-actualizar', $cuenta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center my-1">Registro Cuenta</h3>



        <div class="form-group">
            <label for="name">Nombre de la Cuenta</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$cuenta->name}}">
        </div>

        <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="number" class="form-control" name="saldo" id="saldo" value="{{$cuenta->balance}}">
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>

    </form>
@endsection
