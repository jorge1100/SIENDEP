@extends('layouts.app')

@section('content')

    <div class="mb-6 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Criterios</h1>
        <a href="/criterios/create" class="btn-primary">
    Nuevo Criterio
</a>
    </div>

    <div class="bg-zinc-800 rounded-lg shadow-lg border border-zinc-600 max-w-6xl mx-auto overflow-hidden">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="bg-gray-900 border-b border-zinc-600">
                <tr>
                    <th class="p-4 font-semibold">ID</th>
                    <th class="p-4 font-semibold">Nombre</th>
                    <th class="p-4 font-semibold">Descripción</th>
                    <th class="p-4 font-semibold">Ponderación</th>
                    <th class="p-4 font-semibold text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($criterios as $criterio)
                <tr class="hover:bg-zinc-700 transition-colors">
                    <td class="p-4">{{ $criterio->id }}</td>
                    <td class="p-4 font-bold text-white">{{ $criterio->nombre }}</td>
                    <td class="p-4 text-sm">{{ $criterio->descripcion }}</td>
                    <td class="p-4 font-bold text-blue-400">{{ $criterio->ponderacion }}</td>
                    <td class="p-4 flex justify-center gap-2">
                        
                        <a href="/criterios/{{ $criterio->id }}/edit" class="btn-edit">
                            Editar
                        </a>

                        <form action="/criterios/{{ $criterio->id }}" method="POST" style="display:inline;">
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