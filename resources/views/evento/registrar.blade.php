@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('evento-crear') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Eventos</h3>
        @include('mensajes.messages')
        <div class="form-group">
            <input type="text" class="form-control" name="users_id" id="users_id"
                   value="1" hidden>
        </div>

        <div class="form-group">
            <label for="name">Nombre del evento</label>
            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" id="name"
                   value="{{isset($cuenta->name)?$cuenta->name:old('name') }}">


        </div>


        <div class="form-group">
            <label for="balance">Saldo</label>
            <input type="number" class="form-control {{$errors->has('balance')? 'is-invalid':''}}" name="balance" id="balance"
                   value="{{isset($evento->balance)?$evento->balance:old('balance') }}">
        </div>

        <div class="form-group">
            <label for="needed_balance">Pago Mensual</label>
            <input type="number" class="form-control {{$errors->has('needed_balance')? 'is-invalid':''}}" name="needed_balance" id="needed_balance"
                   value="{{isset($evento->needed_balance)?$evento->needed_balance:old('needed_balance') }}">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
