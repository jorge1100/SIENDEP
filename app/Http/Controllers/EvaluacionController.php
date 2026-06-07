<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\Empleado;
use App\Models\PeriodoEvaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function index()
    {
        $evaluaciones = Evaluacion::with([
            'empleado',
            'periodo'
        ])->get();

        return view(
            'evaluaciones.index',
            compact('evaluaciones')
        );
    }

    public function create()
    {
        $empleados = Empleado::all();
        $periodos = PeriodoEvaluacion::all();

        return view(
            'evaluaciones.create',
            compact('empleados','periodos')
        );
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

        return redirect('/evaluaciones');
    }

    public function edit($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);

        $empleados = Empleado::all();
        $periodos = PeriodoEvaluacion::all();

        return view(
            'evaluaciones.edit',
            compact(
                'evaluacion',
                'empleados',
                'periodos'
            )
        );
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

        return redirect('/evaluaciones');
    }

    public function destroy($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);

        $evaluacion->delete();

        return redirect('/evaluaciones');
    }
}