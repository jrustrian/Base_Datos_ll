@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('tipo-crear') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro de Tipos de Cuenta</h3>



        <div class="form-group">
            <label for="name">Nombre de Tipo de Cuenta</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
