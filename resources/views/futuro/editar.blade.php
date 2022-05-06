@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{ route('futuro-actualizar', $movimiento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center my-1">Actualizacion de Movimientos a Futuro</h3>

        <div>
            <input type="radio" id="future" name="future" value="1"  >
            <label for="future">Si Deseo Hacer Movimientos a Futuro</label>
        </div>
        <div>
            <input type="radio" id="future" name="future" value="0"  >
            <label for="future">No Deseo Hacer Movimientos a Futuro</label>
        </div>


        <div class="form-group">
            <label for="cuentas">Nombre de la Cuenta</label>
            <select name="account_id" id="account_id" class="form-control form-control-lg"  >
                <option selected>selecione</option>
                @foreach ($cuentas as $cuenta)
                    <option value="{{ $cuenta->id }}"
                        {{ $cuenta->id == $movimiento->account_id  ? 'selected' : '' }}>

                        {{ $cuenta->name }}, Saldo Disponibe: {{ $cuenta->balance }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_grado">Tipo de Movimiento</label>
            <select name="movement_type_id" id="movement_type_id" class="form-control form-control-lg">
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}"
                        {{ $tipo->id == $movimiento->type ? 'selected' : '' }}
                    >{{ $tipo->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="credit_amount">Moto a Creditar</label>
            <input type="numer" class="form-control" name="credit_amount" id="credit_amount" value="{{$movimiento->credit_amount}}">
        </div>

        <div class="form-group">
            <label for="debit_amount">Monto a Debitar</label>
            <input type="number" class="form-control" name="debit_amount" id="debit_amount" value="{{$movimiento->debit_amount}}" >
        </div>


        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$movimiento->description}}">
        </div>



        <div class="form-group">
            <label for="m_date">Fecha</label>
            <input type="date" class="form-control" name="m_date" id="m_date" value="{{$movimiento->m_date}}">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
