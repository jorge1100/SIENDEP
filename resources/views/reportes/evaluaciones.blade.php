@extends('layouts.app')

@section('content')

    <div class="mb-6 max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Reporte de Evaluaciones</h1>
    </div>

    <div class="bg-zinc-800 rounded-lg shadow-lg border border-zinc-600 max-w-6xl mx-auto overflow-hidden">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="bg-zinc-900 border-b border-zinc-600">
                <tr>
                    <th class="tabla-encabezado">Empleado</th>
                    <th class="tabla-encabezado">Periodo</th>
                    <th class="tabla-encabezado">Puntaje</th>
                    <th class="tabla-encabezado">Estado</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($evaluaciones as $e)
                <tr class="tabla-fila">
                    <td class="tabla-celda font-bold text-white">
                        {{ $e->empleado->nombre }}
                        {{ $e->empleado->apellido }}
                    </td>
                    <td class="tabla-celda">{{ $e->periodo->nombre }}</td>
                    <td class="tabla-celda font-bold text-blue-400">{{ $e->puntaje_total }}</td>
                    <td class="tabla-celda">
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