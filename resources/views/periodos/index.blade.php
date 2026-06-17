@extends('layouts.app')

@section('content')

    <div class="mb-6 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Períodos de Evaluación</h1>
        <a href="/periodos/create" class="btn-primary">
            Nuevo Período
        </a>
    </div>

    <div class="bg-zinc-800 rounded-lg shadow-lg border border-zinc-600 max-w-6xl mx-auto overflow-hidden">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="bg-gray-900 border-b border-zinc-600">
                <tr>
                    <th class="p-4 font-semibold">ID</th>
                    <th class="p-4 font-semibold">Nombre</th>
                    <th class="p-4 font-semibold">Inicio</th>
                    <th class="p-4 font-semibold">Fin</th>
                    <th class="p-4 font-semibold">Activo</th>
                    <th class="p-4 font-semibold text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($periodos as $periodo)
                <tr class="hover:bg-zinc-700 transition-colors">
                    <td class="p-4">{{ $periodo->id }}</td>
                    <td class="p-4 font-bold text-white">{{ $periodo->nombre }}</td>
                    <td class="p-4">{{ $periodo->fecha_inicio }}</td>
                    <td class="p-4">{{ $periodo->fecha_fin }}</td>
                    <td class="p-4 font-semibold {{ $periodo->activo ? 'text-green-400' : 'text-red-400' }}">
                        {{ $periodo->activo ? 'Sí' : 'No' }}
                    </td>
                    <td class="p-4 flex justify-center gap-2">
                        
                        <a href="/periodos/{{ $periodo->id }}/edit" class="btn-edit">
                            Editar
                        </a>

                        <form action="/periodos/{{ $periodo->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">
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