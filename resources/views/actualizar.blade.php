@extends('layout/plantilla')

@section('tituloPagina', 'Actualizar Registro')

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar Registro</h5>
    <div class="card-body">
        <p class="card-text">
        <form action="#">
            <label for="">Primer Apellido</label>
            <input type="text" name="primer_apellido" class="form-control" required>

            <label for="">Segundo Apellido</label>
            <input type="text" name="segundo_apellido" class="form-control" required>

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>

            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>

            <br>
            <button class="btn btn-warning">
                <i class="fas fa-user-edit"></i> Actualizar
            </button>
            <a href="{{ route('personas.index') }}" class="btn btn-info">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </form>
        </p>
    </div>
</div>
@endsection