<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\Empleado;
use App\Models\PeriodoEvaluacion;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class EvaluacionController extends Controller
{
    public function index()
    {
        $evaluaciones = Evaluacion::with(['empleado', 'periodo'])->get();
        return view('evaluaciones.index', compact('evaluaciones'));
    }

    public function create()
    {
        $empleados = Empleado::all();
        $periodos = PeriodoEvaluacion::all();
        return view('evaluaciones.create', compact('empleados','periodos'));
    }

    public function store(Request $request)
    {
        Evaluacion::create([
            'empleado_id' => $request->empleado_id,
            'periodo_evaluacion_id' => $request->periodo_evaluacion_id,
            'puntaje_total' => $request->puntaje_total,
            'observaciones' => $request->observaciones,
            'estado' => $request->estado
        ]);
        return redirect('/evaluaciones')->with('success', 'Evaluación registrada con éxito.');
    }

    public function edit($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $empleados = Empleado::all();
        $periodos = PeriodoEvaluacion::all();
        return view('evaluaciones.edit', compact('evaluacion', 'empleados', 'periodos'));
    }

    public function update(Request $request, $id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->update([
            'empleado_id' => $request->empleado_id,
            'periodo_evaluacion_id' => $request->periodo_evaluacion_id,
            'puntaje_total' => $request->puntaje_total,
            'observaciones' => $request->observaciones,
            'estado' => $request->estado
        ]);
        return redirect('/evaluaciones')->with('success', 'Evaluación actualizada correctamente.');
    }

    public function destroy($id)
    {
        try {
            $evaluacion = Evaluacion::findOrFail($id);
            $evaluacion->delete();
            return redirect('/evaluaciones')->with('success', 'Evaluación eliminada.');
        } catch (QueryException $e) {
            return redirect('/evaluaciones')->with('error', 'No se puede eliminar porque contiene detalles de evaluación asociados.');
        }
    }
}