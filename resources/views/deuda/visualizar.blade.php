@extends('layouts.app')

@section('content')
    @include('mensajes.messages')

<h3 class="my-1 text-center">Tabla de Deudas</h3>
<div class="row col-12 justify-content-end mb-2 pr-0">

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre de la Deuda</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Monto</th>
            <th scope="col">Cuota Mensual</th>

            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($deudas as $deuda)
            <tr>
                <th scope="row">{{ $deuda->id }}</th>
                <td>{{ $deuda->name }}</td>
                <td>{{ $deuda->description }}</td>
                <td>{{ $deuda->amount }}</td>
                <td>{{ $deuda->monthly_fee}}</td>


                <td>
                    <form method="POST" action="{{ route('deuda-eliminar', $deuda->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Estas Seguro?')"
                                class="btn btn-danger">Eliminar</button>
                    </form>
                    <form method="GET" action="{{ route('deuda-editar', $deuda->id) }}">
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
