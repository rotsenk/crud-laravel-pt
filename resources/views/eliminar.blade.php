@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar Registro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Registro</h5>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estás seguro de eliminar este registro?

            <table class="table table-sm table-bordered">
                <thead>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>

                    <!-- @foreach($datos as $item)
                    <tr>
                        <td>{{ $item->primer_apellido }}</td>
                        <td>{{ $item->segundo_apellido }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->fecha_nacimiento }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach -->
                </tbody>
            </table>
            <hr>
            <form action="">
                <button class="btn btn-danger">
                    <i class="fas fa-user-times"></i> Eliminar
                </button>
                <a href="{{ route('personas.index') }}" class="btn btn-info">
                    <i class="fas fa-arrow-left"></i> Regresar
                </a>
            </form>

        </div>
        </p>
    </div>
</div>
@endsection