@extends('layouts.app')

@section('content')

    <h3 class="my-1 text-center">Tabla de Tipo de Cuenta</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Tipo de cuenta Cuenta</th>

                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tipos as $tipo)
                <tr>
                    <th scope="row">{{ $tipo->id }}</th>
                    <td>{{ $tipo->name }}</td>


                    <td>
                        <form method="POST" action="{{ route('tipo-eliminar', $tipo->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Estas Seguro?')"
                                    class="btn btn-danger">Eliminar</button>
                        </form>
                        <form method="GET" action="#">
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
