@extends('layouts.app')

@section('content')

    <div class="mb-6 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Detalle Evaluaciones</h1>
        <a href="/detalle-evaluaciones/create" class="btn-primary">
            Nuevo Registro
        </a>
    </div>

    <div class="bg-zinc-800 rounded-lg shadow-lg border border-zinc-600 max-w-6xl mx-auto overflow-hidden">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="bg-gray-900 border-b border-zinc-600">
                <tr>
                    <th class="p-4 font-semibold">ID</th>
                    <th class="p-4 font-semibold">Evaluación</th>
                    <th class="p-4 font-semibold">Criterio</th>
                    <th class="p-4 font-semibold">Calificación</th>
                    <th class="p-4 font-semibold">Comentario</th>
                    <th class="p-4 font-semibold text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($detalles as $detalle)
                <tr class="hover:bg-zinc-700 transition-colors">
                    <td class="p-4">{{ $detalle->id }}</td>
                    <td class="p-4">{{ $detalle->evaluacion_id }}</td>
                    <td class="p-4 font-bold text-white">{{ $detalle->criterio->nombre }}</td>
                    <td class="p-4 font-bold text-blue-400">{{ $detalle->calificacion }}</td>
                    <td class="p-4 text-sm">{{ $detalle->comentario }}</td>
                    <td class="p-4 flex justify-center gap-2">
                        
                        <a href="/detalle-evaluaciones/{{ $detalle->id }}/edit" class="btn-edit">
                            Editar
                        </a>

                        <form action="/detalle-evaluaciones/{{ $detalle->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Desea eliminar este registro?')" class="btn-danger">
                                Eliminar
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection