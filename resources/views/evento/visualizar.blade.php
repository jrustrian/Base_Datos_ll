@extends('layouts.app')

@section('content')
    @include('mensajes.messages')
    <h3 class="my-1 text-center">Tabla de Eventos</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del Evento</th>
                <th scope="col">Saldo</th>
                <th scope="col">Pago Mensual</th>

                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($eventos as $evento)
                <tr>
                    <th scope="row">{{ $evento->id }}</th>
                    <td>{{ $evento->name }}</td>
                    <td>{{ $evento->balance }}</td>
                    <td>{{ $evento->needed_balance }}</td>

                    <td>
                        <form method="POST" action="{{ route('evento-eliminar', $evento->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Estas Seguro?')"
                                    class="btn btn-danger">Eliminar</button>
                        </form>
                        <form method="GET" action="{{ route('evento-editar', $evento->id) }}">
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
