<?php

namespace App\Http\Controllers;

use App\Models\Metrica;
use App\Models\Empleado;
use Illuminate\Http\Request;

class MetricaController extends Controller
{
    public function index()
    {
        $metricas = Metrica::with('empleado')->get();
        return view('metricas.index', compact('metricas'));
    }

    public function create()
    {
        $empleados = Empleado::all();
        return view('metricas.create', compact('empleados'));
    }

    public function store(Request $request)
    {
        Metrica::create([
            'empleado_id' => $request->empleado_id,
            'tipo' => $request->tipo,
            'valor' => $request->valor,
            'fecha' => $request->fecha
        ]);
        return redirect('/metricas')->with('success', 'Métrica registrada exitosamente.');
    }

    public function edit($id)
    {
        $metrica = Metrica::findOrFail($id);
        $empleados = Empleado::all();
        return view('metricas.edit', compact('metrica', 'empleados'));
    }

    public function update(Request $request, $id)
    {
        $metrica = Metrica::findOrFail($id);
        $metrica->update([
            'empleado_id' => $request->empleado_id,
            'tipo' => $request->tipo,
            'valor' => $request->valor,
            'fecha' => $request->fecha
        ]);
        return redirect('/metricas')->with('success', 'Métrica actualizada.');
    }

    public function destroy($id)
    {
        $metrica = Metrica::findOrFail($id);
        $metrica->delete();
        return redirect('/metricas')->with('success', 'Métrica eliminada del sistema.');
    }
}