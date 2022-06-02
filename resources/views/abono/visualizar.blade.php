@extends('layouts.app')

@section('content')
    @include('mensajes.messages')

    <h3 class="my-1 text-center">Tabla de Pagos de Deudas</h3>
    <div class="row col-12 justify-content-end mb-2 pr-0">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del la Deuda</th>
                <th scope="col">Nombre de la Cuenta</th>
                <th scope="col">Pago</th>
                <th scope="col">Fecha</th>

                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>

            <tr>



                <td>
                    <form method="POST" action="#">
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

            </tbody>
        </table>
    </div>

@endsection
