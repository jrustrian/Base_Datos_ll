@extends('layouts.app')

@section('content')

    <h3 class="my-1 text-center">Tabla de Cuentas</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de la Cuenta</th>
                <th scope="col">Balance</th>

                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cuentas as $cuenta)
                <tr>
                    <th scope="row">{{ $cuenta->id }}</th>
                    <td>{{ $cuenta->name }}</td>
                    <td>{{ $cuenta->balance }}</td>

                    <td>
                        <form method="POST" action="{{ route('cuenta-eliminar', $cuenta->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Estas Seguro?')"
                                    class="btn btn-danger">Eliminar</button>
                        </form>
                        <form method="GET" action="{{ route('cuenta-editar', $cuenta->id) }}">
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
