@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('deuda-actualizar', $deuda->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center my-1">Registro Deuda</h3>



        <div class="form-group">
            <label for="name">Nombre de la deuda</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$deuda->name}}">
        </div>

        <div class="form-group">
            <label for="description">descripcion</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$deuda->description}}">
        </div>

        <div class="form-group">
            <label for="amount">Monto</label>
            <input type="number" class="form-control" name="amount" id="amount" value="{{$deuda->amount}}">
        </div>

        <div class="form-group">
            <label for="monthly_fee">Cuota Mensual</label>
            <input type="number" class="form-control"  name="monthly_fee" id="monthly_fee" value="{{$deuda->monthly_fee}}"  >
        </div>


        <button type="submit" class="btn btn-primary">Editar Deuda</button>
    </form>
@endsection
