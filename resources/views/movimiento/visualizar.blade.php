@extends('layouts.app')

@section('content')

    <h3 class="my-1 text-center">Tabla de Movimiento</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de la Cuenta</th>
                <th scope="col">Tipo de Movimiento</th>
                <th scope="col">Monto a Creditar</th>
                <th scope="col">Monto a Debitar</th>
                <th scope="col">IVA</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Movimiento a Futuro</th>
                <th scope="col">Fecha</th>

                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($movimientos as $movimiento)
                <tr>
                    <th scope="row">{{ $movimiento->id }}</th>
                    <td>{{ $movimiento->account }}</td>
                    <td>{{ $movimiento->types }}</td>
                    <td>{{ $movimiento->credit_amount }}</td>
                    <td>{{ $movimiento->debit_amount}}</td>
                    <td>{{ $movimiento->iva}}</td>
                    <td>{{ $movimiento->description}}</td>
                    <td>{{ $movimiento->future}}</td>
                    <td>{{ $movimiento->m_date}}</td>


                    <td>
                        <form method="POST" action="{{ route('movimiento-eliminar', $movimiento->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Estas Seguro?')"
                                    class="btn btn-danger">Eliminar</button>
                        </form>
                        <form method="GET" action="{{ route('movimiento-editar', $movimiento->id) }}">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
