@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('movimiento-crear') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Movimiento</h3>
        @include('mensajes.messages')
        <div class="form-group hidden">
            <label for="id_grado">Nombre de la Cuenta</label>
            <select name="account_id" id="account_id" class="form-control form-control-lg"
                    value="{{isset($movimiento->account_id)?$movimiento->account_id:old('account_id') }}">
                <option selected>selecione</option>
                @foreach ($cuentas as $cuenta)

                    <option value="{{ $cuenta->id }}">{{ $cuenta->name }}, Saldo Disponible:{{ $cuenta->balance }} </option>

                @endforeach
                <div class="form-group hidden" id="res_origen"></div>
            </select>
        </div>

        <div class="form-group">
            <label for="id_grado">Tipo de Movimiento</label>
            <select name="movement_type_id" id="movement_type_id" class="form-control form-control-lg"
                    value="{{isset($movimiento->movement_type_id)?$movimiento->movement_type_id:old('movement_type_id') }}">
                <option selected>selecione</option>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="credit_amount">Moto a Creditar</label>
            <input type="numer" class="form-control {{$errors->has('credit_amount')? 'is-invalid':''}}" name="credit_amount" id="credit_amount"
                   value="{{isset($movimiento->credit_amount)?$movimiento->credit_amount:old('credit_amount') }}">
        </div>

        <div class="form-group">
            <label for="debit_amount">Monto a Debitar</label>
            <input type="number" class="form-control {{$errors->has('debit_amount')? 'is-invalid':''}}" name="debit_amount" id="debit_amount"
                   value="{{isset($movimiento->debit_amount)?$movimiento->debit_amount:old('debit_amount') }}" >
        </div>


        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" class="form-control {{$errors->has('description')? 'is-invalid':''}}" name="description" id="description"
                   value="{{isset($movimiento->description)?$movimiento->description:old('description') }}">
        </div>


        <div>
            <input type="radio" id="future" name="future" value="1"
                    >
            <label for="future">Si Deseo Hacer Movimientos a Futuro</label>
        </div>
        <div>
            <input type="radio" id="future" name="future" value="0"
                   value="{{isset($movimiento->future)?$movimiento->future:old('future') }}"  >
            <label for="future">No Deseo Hacer Movimientos a Futuro</label>
        </div>

        <div class="form-group">
            <label for="m_date">Fecha</label>
            <input type="date" class="form-control {{$errors->has('m_date')? 'is-invalid':''}}" name="m_date" id="m_date"
                   value="{{isset($movimiento->m_date)?$movimiento->m_date:old('m_date') }}">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
