@extends('layouts.app')

@section('content')

    <div class="mb-6 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Evaluaciones</h1>
        <a href="/evaluaciones/create" class="btn-primary">
            Nueva Evaluación
        </a>
    </div>

    <div class="bg-zinc-800 rounded-lg shadow-lg border border-zinc-600 max-w-6xl mx-auto overflow-hidden">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="bg-gray-900 border-b border-zinc-600">
                <tr>
                    <th class="p-4 font-semibold">ID</th>
                    <th class="p-4 font-semibold">Empleado</th>
                    <th class="p-4 font-semibold">Periodo</th>
                    <th class="p-4 font-semibold">Puntaje</th>
                    <th class="p-4 font-semibold">Estado</th>
                    <th class="p-4 font-semibold text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($evaluaciones as $evaluacion)
                <tr class="hover:bg-zinc-700 transition-colors">
                    <td class="p-4">{{ $evaluacion->id }}</td>
                    <td class="p-4 font-bold text-white">
                        {{ $evaluacion->empleado->nombre }} 
                        {{ $evaluacion->empleado->apellido }}
                    </td>
                    <td class="p-4">{{ $evaluacion->periodo->nombre }}</td>
                    <td class="p-4 font-bold text-blue-400">{{ $evaluacion->puntaje_total }}</td>
                    <td class="p-4">
                        <span class="px-2 py-1 rounded text-xs font-semibold {{ $evaluacion->estado == 'finalizada' ? 'bg-green-900 text-green-300' : 'bg-yellow-900 text-yellow-300' }}">
                            {{ ucfirst($evaluacion->estado) }}
                        </span>
                    </td>
                    <td class="p-4 flex justify-center gap-2">
                        
                        <a href="/evaluaciones/{{ $evaluacion->id }}/edit" class="btn-edit">
                            Editar
                        </a>

                        <form action="/evaluaciones/{{ $evaluacion->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Desea eliminar esta evaluación?')" class="btn-danger">
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