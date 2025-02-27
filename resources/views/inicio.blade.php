@extends('layout/plantilla')

@section('tituloPagina', 'Crud Laravel')

@section('contenido')
<div class="card">
    <h5 class="card-header">CRUD con Laravel y MySql</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif
            </div>
        </div>
        <h5 class="card-title">Lista de personas</h5>
        <p>
            <a href=" {{ route('personas.create') }} " class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar Nuevo Registro
            </a>
        </p>
        <p class="card-text">
            <hr>
        <div class="table table-responsive">
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

                    @foreach($datos as $item)
                    <tr>
                        <td>{{ $item->primer_apellido }}</td>
                        <td>{{ $item->segundo_apellido }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->fecha_nacimiento }}</td>
                        <td>
                            <form action="{{ route('personas.edit', $item->id) }}" method="GET">
                                <button class="btn btn-warning btn-sm">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="">
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-user-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </p>
    </div>
</div>

@endsection