@extends('layouts.app')

@section('content')

    <div class="mb-6 flex items-center gap-4 max-w-6xl mx-auto">
        <a href="/reportes" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
        <h1 class="text-3xl font-bold text-white">Reporte de Evaluaciones</h1>
    </div>

    <div class="card-container">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="table-header">
                <tr>
                    <th class="p-4 font-semibold">Empleado</th>
                    <th class="p-4 font-semibold">Periodo</th>
                    <th class="p-4 font-semibold">Puntaje</th>
                    <th class="p-4 font-semibold">Estado</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($evaluaciones as $e)
                <tr class="table-row">
                    <td class="p-4 font-bold text-white">
                        {{ $e->empleado->nombre }}
                        {{ $e->empleado->apellido }}
                    </td>
                    <td class="p-4">{{ $e->periodo->nombre }}</td>
                    <td class="p-4 font-bold text-blue-400">{{ $e->puntaje_total }}</td>
                    <td class="p-4">
                        <span class="px-2 py-1 rounded text-xs font-semibold {{ $e->estado == 'finalizada' ? 'bg-green-900 text-green-300' : 'bg-yellow-900 text-yellow-300' }}">
                            {{ ucfirst($e->estado) }}
                        </span>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection