<?php

namespace App\Http\Controllers;

use App\Models\Autoevaluacion;
use App\Models\Empleado;
use App\Models\PeriodoEvaluacion;
use Illuminate\Http\Request;

class AutoevaluacionController extends Controller
{
    public function index()
    {
        $autoevaluaciones = Autoevaluacion::with([
            'empleado',
            'periodo'
        ])->get();

        return view(
            'autoevaluaciones.index',
            compact('autoevaluaciones')
        );
    }

    public function create()
    {
        $empleados = Empleado::all();
        $periodos = PeriodoEvaluacion::all();

        return view(
            'autoevaluaciones.create',
            compact(
                'empleados',
                'periodos'
            )
        );
    }

    public function store(Request $request)
    {
        Autoevaluacion::create([
            'empleado_id' => $request->empleado_id,
            'periodo_evaluacion_id' => $request->periodo_evaluacion_id,
            'comentarios' => $request->comentarios,
            'puntaje_total' => $request->puntaje_total
        ]);

        return redirect('/autoevaluaciones');
    }

    public function edit($id)
    {
        $autoevaluacion = Autoevaluacion::findOrFail($id);

        $empleados = Empleado::all();
        $periodos = PeriodoEvaluacion::all();

        return view(
            'autoevaluaciones.edit',
            compact(
                'autoevaluacion',
                'empleados',
                'periodos'
            )
        );
    }

    public function update(Request $request, $id)
    {
        $autoevaluacion = Autoevaluacion::findOrFail($id);

        $autoevaluacion->update([
            'empleado_id' => $request->empleado_id,
            'periodo_evaluacion_id' => $request->periodo_evaluacion_id,
            'comentarios' => $request->comentarios,
            'puntaje_total' => $request->puntaje_total
        ]);

        return redirect('/autoevaluaciones');
    }

    public function destroy($id)
    {
        Autoevaluacion::findOrFail($id)->delete();

        return redirect('/autoevaluaciones');
    }
}