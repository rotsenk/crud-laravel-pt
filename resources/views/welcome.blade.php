@extends('layout/plantilla')

@section('tituloPagina', 'Crud Laravel')

@section('contenido')
    <div class="row">
        <h1>Hello World</h1>
        <i class="fas fa-wrench"></i>
        <a href="{{ route( 'personas.create' ) }}">Agregar</a>
    </div>

@endsection