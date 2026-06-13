@extends('layouts.app')

@section('content')

    <div class="mb-6 max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Promedio por Empleado</h1>
    </div>

    <div class="bg-zinc-800 rounded-lg shadow-lg border border-zinc-600 max-w-6xl mx-auto overflow-hidden">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="bg-zinc-900 border-b border-zinc-600">
                <tr>
                    <th class="tabla-encabezado">Empleado</th>
                    <th class="tabla-encabezado">Promedio</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($promedios as $p)
                <tr class="tabla-fila">
                    <td class="tabla-celda font-bold text-white">
                        {{ $p->nombre }}
                        {{ $p->apellido }}
                    </td>
                    <td class="tabla-celda font-bold text-blue-400">
                        {{ number_format($p->promedio, 2) }}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection