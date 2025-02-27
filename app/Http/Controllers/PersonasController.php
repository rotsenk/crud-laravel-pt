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
        //print_r($_POST);
        $personas = new Personas();
        $personas->primer_apellido = $request->post('primer_apellido');
        $personas->segundo_apellido = $request->post('segundo_apellido');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Agregado con éxito!");
    }

    public function show($id)
    {
        // servirá para obtener un registro de nuestra tabla
        $persona = Personas::find($id);
        return view('eliminar', compact('persona'));
    }

    public function edit($id)
    {
        // método para traer datos a editar y los coloca en un formulario
        $persona = Personas::find($id);
        return view('actualizar', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        // este método actualiza los datos en la DB
        $personas = Personas::find($id);
        $personas->primer_apellido = $request->post('primer_apellido');
        $personas->segundo_apellido = $request->post('segundo_apellido');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route('personas.index')->with('success', 'Actualizado con éxito!');

    }

    public function destroy($id)
    {
        // elimina un registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con éxito!");
    }
}
