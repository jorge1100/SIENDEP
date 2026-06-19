@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto">

    <h1 class="text-3xl font-bold text-white mb-8">
        Reportes
    </h1>

    <div class="grid md:grid-cols-3 gap-6">

        <a href="{{ url('/reportes/evaluaciones') }}"
           class="bg-gray-900 border border-zinc-600 rounded-lg p-6 hover:bg-zinc-700 transition">
            <h2 class="text-xl font-semibold text-white mb-2">
                Reporte de Evaluaciones
            </h2>
            <p class="text-zinc-300">
                Consulta todas las evaluaciones registradas.
            </p>
        </a>

        <a href="{{ url('/reportes/ranking') }}"
          class="bg-gray-900 border border-zinc-600 rounded-lg p-6 hover:bg-zinc-700 transition">
            <h2 class="text-xl font-semibold text-white mb-2">
                Ranking de Empleados
            </h2>
            <p class="text-zinc-300">
                Visualiza el ranking según puntajes obtenidos.
            </p>
        </a>

        <a href="{{ url('/reportes/promedio') }}"
           class="bg-gray-900 border border-zinc-600 rounded-lg p-6 hover:bg-zinc-700 transition">
            <h2 class="text-xl font-semibold text-white mb-2">
                Promedio por Empleado
            </h2>
            <p class="text-zinc-300">
                Consulta los promedios generales de desempeño.
            </p>
        </a>

    </div>

</div>

@endsection