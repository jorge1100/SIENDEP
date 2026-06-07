<?php

namespace App\Http\Controllers;

use App\Models\PeriodoEvaluacion;
use Illuminate\Http\Request;

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

        return redirect('/periodos');
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

        return redirect('/periodos');
    }

    public function destroy($id)
    {
        PeriodoEvaluacion::findOrFail($id)->delete();

        return redirect('/periodos');
    }
}