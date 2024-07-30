<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    // Mostrar la lista de materias
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index', compact('materias'));
    }

    // Mostrar el formulario de creación
    public function create()
    {
        return view('materias.create');
    }

    // Guardar una nueva materia
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|integer',
            'tipo' => 'required',
            'valor_hora' => 'required|numeric',
            'estado' => 'required'
        ]);

        Materia::create($request->all());

        return redirect()->route('materias.index')
                         ->with('success', 'Materia creada correctamente.');
    }

    // Mostrar el formulario de edición
    public function edit($id)
    {
        $materia = Materia::find($id);
        return view('materias.edit', compact('materia'));
    }

    // Actualizar una materia
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|integer',
            'tipo' => 'required',
            'valor_hora' => 'required|numeric',
            'estado' => 'required'
        ]);

        $materia = Materia::find($id);
        $materia->update($request->all());

        return redirect()->route('materias.index')
                         ->with('success', 'Materia actualizada correctamente.');
    }

    // Eliminar una materia
    public function destroy($id)
    {
        $materia = Materia::find($id);
        $materia->delete();

        return redirect()->route('materias.index')
                         ->with('success', 'Materia eliminada correctamente.');
    }
}
