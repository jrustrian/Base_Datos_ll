@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('tipo-actualizar', $tipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center my-1">Edicion de Tipos de cuenta</h3>



        <div class="form-group">
            <label for="name">Nombre de Tipo de Cuenta</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$tipo->name}}">
        </div>



        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection
