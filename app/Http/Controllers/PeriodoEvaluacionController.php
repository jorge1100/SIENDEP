<?php

namespace App\Http\Controllers;

use App\Models\PeriodoEvaluacion;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class PeriodoEvaluacionController extends Controller
{
    public function index()
    {
        $periodos = PeriodoEvaluacion::all();

        return view(
            'periodos.index',
            compact('periodos')
        );
    }

    public function create()
    {
        return view('periodos.create');
    }

    public function store(Request $request)
    {
        PeriodoEvaluacion::create([
            'nombre' => $request->nombre,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'activo' => $request->activo ? 1 : 0
        ]);

        return redirect('/periodos')->with('success', 'Período registrado exitosamente.');
    }

    public function edit($id)
    {
        $periodo = PeriodoEvaluacion::findOrFail($id);

        return view(
            'periodos.edit',
            compact('periodo')
        );
    }

    public function update(Request $request, $id)
    {
        $periodo = PeriodoEvaluacion::findOrFail($id);

        $periodo->update([
            'nombre' => $request->nombre,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'activo' => $request->activo ? 1 : 0
        ]);

        return redirect('/periodos')->with('success', 'Período actualizado correctamente.');
    }

    public function destroy($id)
    {
        try {
            $periodo = PeriodoEvaluacion::findOrFail($id);
            $periodo->delete();
            
            return redirect('/periodos')->with('success', 'Periodo de evaluación eliminado con éxito.');
            
        } catch (QueryException $e) {
            if ($e->getCode() == "23000") {
                return redirect('/periodos')->with('error', 'No puedes eliminar este periodo porque ya contiene evaluaciones históricas de empleados.');
            }
            
            return redirect('/periodos')->with('error', 'Ocurrió un error inesperado al intentar eliminar el periodo.');
        }
    }
}