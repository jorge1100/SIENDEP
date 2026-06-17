@extends('layouts.app')

@section('content')

    <div class="mb-6 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Autoevaluaciones</h1>
        <a href="/autoevaluaciones/create" class="btn-primary">
            Nueva Autoevaluación
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
                    <th class="p-4 font-semibold">Comentarios</th>
                    <th class="p-4 font-semibold text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($autoevaluaciones as $autoevaluacion)
                <tr class="hover:bg-zinc-700 transition-colors">
                    <td class="p-4">{{ $autoevaluacion->id }}</td>
                    <td class="p-4 font-bold text-white">
                        {{ $autoevaluacion->empleado->nombre }} 
                        {{ $autoevaluacion->empleado->apellido }}
                    </td>
                    <td class="p-4">{{ $autoevaluacion->periodo->nombre }}</td>
                    <td class="p-4 font-bold text-blue-400">{{ $autoevaluacion->puntaje_total }}</td>
                    <td class="p-4 text-sm">{{ $autoevaluacion->comentarios }}</td>
                    <td class="p-4 flex justify-center gap-2">
                        
                        <a href="/autoevaluaciones/{{ $autoevaluacion->id }}/edit" class="btn-edit">
                            Editar
                        </a>

                        <form action="/autoevaluaciones/{{ $autoevaluacion->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Desea eliminar esta autoevaluación?')" class="btn-danger">
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