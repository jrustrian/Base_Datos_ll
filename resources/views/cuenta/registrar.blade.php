@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('cuenta-crear') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Cuenta</h3>

        <div class="form-group">
            <label for="users_id">usuario</label>
            <input type="text" class="form-control" name="users_id" id="users_id">
        </div>

        <div class="form-group">
            <label for="name">Nombre de la Cuenta</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="number" class="form-control" name="saldo" id="saldo">
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
