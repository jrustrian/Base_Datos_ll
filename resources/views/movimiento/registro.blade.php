@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('movimiento-crear') }}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Movimiento</h3>

        <div class="form-group hidden">
            <label for="id_grado">Nombre de la Cuenta</label>
            <select name="account_id" id="account_id" class="form-control form-control-lg">
                <option selected>selecione</option>
                @foreach ($cuentas as $cuenta)

                    <option value="{{ $cuenta->id }}">{{ $cuenta->name }}, Saldo Disponible:{{ $cuenta->balance }} </option>
                @endforeach
            </select>
            <div class="form-group hidden" id="res_origen" value=""></div>
        </div>

        <div class="form-group">
            <label for="id_grado">Tipo de Movimiento</label>
            <select name="movement_type_id" id="movement_type_id" class="form-control form-control-lg">
                <option selected>selecione</option>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="credit_amount">Moto a Creditar</label>
            <input type="numer" class="form-control" name="credit_amount" id="credit_amount">
        </div>

        <div class="form-group">
            <label for="debit_amount">Monto a Debitar</label>
            <input type="number" class="form-control" name="debit_amount" id="debit_amount">
        </div>


        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>

        <div class="form-group">
            <label for="future">Movimiento a Futuro</label>
            <input type="number" class="form-control" name="future" id="future">
        </div>

        <div class="form-group">
            <label for="m_date">Fecha</label>
            <input type="date" class="form-control" name="m_date" id="m_date">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
