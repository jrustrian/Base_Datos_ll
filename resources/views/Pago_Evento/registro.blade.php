@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="#" method="POST">
        @csrf
        @method('PUT')
        <h3 class="text-center my-1">Registro de Pagos de Evento</h3>


        <div class="form-group">
            <label for="">Nombre del Evento</label>
            <select name="v_debt_id" id="v_debt_id" class="form-control form-control-lg">
                <option selected>selecione</option>
                @foreach ($deudas as $deuda)

                    <option value="{{ $deuda->id }}">{{ $deuda->name }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="id_grado">Cuenta a Debitar</label>
            <select name="v_account_id" id="v_account_id" class="form-control form-control-lg">
                <option selected>selecione</option>
                @foreach ($cuentas as $cuenta)

                    <option value="{{ $cuenta->id }}">{{ $cuenta->name }}</option>
                @endforeach
            </select>
            <div class="form-group hidden" id="res_origen" value="{{$cuenta ->balance}}"> </div>
        </div>

        <div class="form-group">
            <label for="credit_amount">Moto a Abonar</label>
            <input type="numer" class="form-control" name="v_payment_amount" id="credit_amount">
        </div>


        <div class="form-group">
            <label for="future">Movimiento a Futuro</label>
            <input type="number" class="form-control" name="v_future" id="v_future">
        </div>

        <div class="form-group">
            <label for="m_date">Fecha</label>
            <input type="date" class="form-control" name="v_date" id="v_date">
        </div>



        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
