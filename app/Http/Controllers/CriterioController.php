<?php

namespace App\Http\Controllers;

use App\Models\Criterio;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class CriterioController extends Controller
{
    public function index()
    {
        $criterios = Criterio::all();

        return view(
            'criterios.index',
            compact('criterios')
        );
    }

    public function create()
    {
        return view('criterios.create');
    }

    public function store(Request $request)
    {
        Criterio::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'ponderacion' => $request->ponderacion
        ]);

        return redirect('/criterios')->with('success', 'Criterio creado exitosamente.');
    }

    public function edit($id)
    {
        $criterio = Criterio::findOrFail($id);

        return view(
            'criterios.edit',
            compact('criterio')
        );
    }

    public function update(Request $request, $id)
    {
        $criterio = Criterio::findOrFail($id);

        $criterio->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'ponderacion' => $request->ponderacion
        ]);

        return redirect('/criterios')->with('success', 'Criterio actualizado correctamente.');
    }

    public function destroy($id)
    {
        try {
            $criterio = Criterio::findOrFail($id);
            $criterio->delete();

            return redirect('/criterios')->with('success', 'Criterio eliminado con éxito.');
        } catch (QueryException $e) {
            if ($e->getCode() == "23000") {
                return redirect('/criterios')->with('error', 'No puedes eliminar este criterio porque ya está siendo utilizado en detalles de evaluaciones registradas.');
            }

            return redirect('/criterios')->with('error', 'Ocurrió un error inesperado al intentar eliminar el criterio.');
        }
    }
}