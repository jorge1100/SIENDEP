<?php

namespace App\Http\Controllers;

use App\Models\DetalleEvaluacion;
use App\Models\Evaluacion;
use App\Models\Criterio;
use Illuminate\Http\Request;

class DetalleEvaluacionController extends Controller
{
    public function index()
    {
        $detalles = DetalleEvaluacion::with([
            'evaluacion',
            'criterio'
        ])->get();

        return view(
            'detalle_evaluaciones.index',
            compact('detalles')
        );
    }

    public function create()
    {
        $evaluaciones = Evaluacion::all();
        $criterios = Criterio::all();

        return view(
            'detalle_evaluaciones.create',
            compact(
                'evaluaciones',
                'criterios'
            )
        );
    }

    public function store(Request $request)
    {
        DetalleEvaluacion::create([
            'evaluacion_id' => $request->evaluacion_id,
            'criterio_id' => $request->criterio_id,
            'calificacion' => $request->calificacion,
            'comentario' => $request->comentario
        ]);

        return redirect('/detalle-evaluaciones');
    }

    public function edit($id)
    {
        $detalle = DetalleEvaluacion::findOrFail($id);

        $evaluaciones = Evaluacion::all();
        $criterios = Criterio::all();

        return view(
            'detalle_evaluaciones.edit',
            compact(
                'detalle',
                'evaluaciones',
                'criterios'
            )
        );
    }

    public function update(Request $request, $id)
    {
        $detalle = DetalleEvaluacion::findOrFail($id);

        $detalle->update([
            'evaluacion_id' => $request->evaluacion_id,
            'criterio_id' => $request->criterio_id,
            'calificacion' => $request->calificacion,
            'comentario' => $request->comentario
        ]);

        return redirect('/detalle-evaluaciones');
    }

    public function destroy($id)
    {
        DetalleEvaluacion::findOrFail($id)->delete();

        return redirect('/detalle-evaluaciones');
    }
}