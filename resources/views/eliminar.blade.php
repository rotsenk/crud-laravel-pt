@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar Registro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Registro</h5>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estás seguro de eliminar este registro?
        </div>
        <table class="table table-sm table-bordered">
            <thead>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $persona->primer_apellido }}</td>
                    <td>{{ $persona->segundo_apellido }}</td>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->fecha_nacimiento }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                <i class="fas fa-user-times"></i> Eliminar
            </button>
            <a href="{{ route('personas.index') }}" class="btn btn-info">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </form>
        </p>
    </div>
</div>
@endsection