@extends('layouts.app')

@section('content')

    <div class="mb-6 flex items-center gap-4 max-w-6xl mx-auto">
        <a href="/reportes" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
        <h1 class="text-3xl font-bold text-white">Promedio por Empleado</h1>
    </div>

    <div class="card-container">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="table-header">
                <tr>
                    <th class="p-4 font-semibold">Empleado</th>
                    <th class="p-4 font-semibold">Promedio</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($promedios as $p)
                <tr class="table-row">
                    <td class="p-4 font-bold text-white">
                        {{ $p->nombre }}
                        {{ $p->apellido }}
                    </td>
                    <td class="p-4 font-bold text-blue-400">
                        {{ number_format($p->promedio, 2) }}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection