<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{

public function index()
{
    return view('reportes.index');
}

    public function evaluaciones()
    {
        $evaluaciones = Evaluacion::with(
            'empleado',
            'periodo'
        )->get();

        return view(
            'reportes.evaluaciones',
            compact('evaluaciones')
        );
    }

    public function ranking()
    {
        $ranking = Evaluacion::with('empleado')
            ->orderBy('puntaje_total','desc')
            ->get();

        return view(
            'reportes.ranking',
            compact('ranking')
        );
    }

    public function promedio()
    {
        $promedios = DB::table('evaluacions')
            ->join(
                'empleados',
                'evaluacions.empleado_id',
                '=',
                'empleados.id'
            )
            ->select(
                'empleados.nombre',
                'empleados.apellido',
                DB::raw('AVG(puntaje_total) as promedio')
            )
            ->groupBy(
                'empleados.id',
                'empleados.nombre',
                'empleados.apellido'
            )
            ->get();

        return view(
            'reportes.promedio',
            compact('promedios')
        );
    }
}