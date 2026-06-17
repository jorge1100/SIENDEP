@extends('layouts.app')

@section('content')

    <div class="mb-6 max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Ranking de Empleados</h1>
    </div>

    <div class="bg-zinc-800 rounded-lg shadow-lg border border-zinc-600 max-w-6xl mx-auto overflow-hidden">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="table-header">
                <tr>
                    <th class="tabla-encabezado">Puesto</th>
                    <th class="tabla-encabezado">Empleado</th>
                    <th class="tabla-encabezado">Puntaje</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($ranking as $r)
                <tr class="tabla-fila">
                    <td class="tabla-celda text-zinc-400 font-bold text-lg">
                        #{{ $loop->iteration }}
                    </td>
                    <td class="tabla-celda font-bold text-white">
                        {{ $r->empleado->nombre }}
                        {{ $r->empleado->apellido }}
                    </td>
                    <td class="tabla-celda font-bold text-blue-400">
                        {{ $r->puntaje_total }}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection