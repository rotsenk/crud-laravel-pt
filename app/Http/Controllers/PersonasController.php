<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        // página de inicio
        return view( 'welcome' );
    }

    public function create()
    {
        //  formulario donde agregaremos los datos
        return "aquí puedes agregar";
    }

    public function store(Request $request)
    {
        // sirve para guardar datos en la BD
    }

    public function show(Personas $personas)
    {
        // servirá para obtener un registro de nuestra tabla
    }

    public function edit(Personas $personas)
    {
        // método para traer datos a editar y los coloca en un formulario
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
