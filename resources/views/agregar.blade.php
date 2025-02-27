@extends('layout/plantilla')

@section('tituloPagina', 'Registrar Nuevo')

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar Nuevo</h5>
    <div class="card-body">
        <p class="card-text">
        <form action="{{ route('personas.store') }}" method="POST">
            @csrf
            <label for="">Primer Apellido</label>
            <input type="text" name="primer_apellido" class="form-control" required>

            <label for="">Segundo Apellido</label>
            <input type="text" name="segundo_apellido" class="form-control" required>

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>

            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>

            <br>
            <button class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar
            </button>
            <a href="{{ route('personas.index') }}" class="btn btn-info">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </form>
        </p>
    </div>
</div>
@endsection