@extends('layouts.app')

@section('content')

<form class="w-50 mx-auto mt-5 pt-5" action="{{ route('deuda-crear') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Deuda</h3>
    @include('mensajes.messages')

    <div class="form-group">
<<<<<<< Updated upstream
        <input type="text" class="form-control" name="users_id" id="users_id"
               value="1" hidden>
=======
        <label for="users_id">Usuario</label>
        <input type="text" class="form-control {{$errors->has('users_id')? 'is-invalid':''}}" name="users_id" id="users_id"
               value="{{isset($deuda->users_id)?$deuda->users_id:old('users_id') }}">
>>>>>>> Stashed changes
    </div>

        <div class="form-group">
            <label for="name">Nombre de la deuda</label>
            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" id="name"
                   value="{{isset($deuda->name)?$deuda->name:old('name') }}">
        </div>

        <div class="form-group">
            <label for="description">descripcion</label>
            <input type="text" class="form-control {{$errors->has('description')? 'is-invalid':''}}" name="description" id="description"
                   value="{{isset($deuda->description)?$deuda->description:old('description') }}">
        </div>

        <div class="form-group">
            <label for="amount">Monto</label>
            <input type="number" class="form-control {{$errors->has('amount')? 'is-invalid':''}}" name="amount" id="amount"
                   value="{{isset($deuda->amount)?$deuda->amount:old('amount') }}">
        </div>

        <div class="form-group">
            <label for="monthly_fee">Cuota Mensual</label>
            <input type="number" class="form-control {{$errors->has('monthly_fee')? 'is-invalid':''}}" name="monthly_fee" id="monthly_fee"
                   value="{{isset($deuda->monthly_fee)?$deuda->monthly_fee:old('monthly_fee') }}">
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
