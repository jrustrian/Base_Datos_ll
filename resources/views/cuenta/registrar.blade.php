@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('cuenta-crear') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Cuenta</h3>
        @include('mensajes.messages')
        <div class="form-group">
            <label for="users_id">usuario</label>
            <input type="text" class="form-control {{$errors->has('users_id')? 'is-invalid':''}}" name="users_id" id="users_id"
                   value="{{isset($cuenta->users_id)?$cuenta->users_id:old('users_id') }}">


        </div>

        <div class="form-group">
            <label for="name">Nombre de la Cuenta</label>
            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid':''}}" name="name" id="name"
            value="{{isset($cuenta->name)?$cuenta->name:old('name') }}">


        </div>

        <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="number" class="form-control {{$errors->has('saldo')? 'is-invalid':''}}" name="saldo" id="saldo"
                   value="{{isset($cuenta->saldo)?$cuenta->saldo:old('saldo') }}">
        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
