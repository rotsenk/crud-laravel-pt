<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        // página de inicio
        $datos = Personas::all();
        return view( 'inicio', compact('datos'));
    }

    public function create()
    {
        //  formulario donde agregaremos los datos
        return view( 'agregar' );
    }

    public function store(Request $request)
    {
        // sirve para guardar datos en la BD
    }

    public function show(Personas $personas)
    {
        // servirá para obtener un registro de nuestra tabla
        return view('eliminar');
    }

    public function edit(Personas $personas)
    {
        // método para traer datos a editar y los coloca en un formulario
        return view('actualizar');
    }

    public function update(Request $request, Personas $personas)
    {
        // este método actualiza los datos en la DB
    }

    public function destroy(Personas $personas)
    {
        // elimina un registro
    }
}
