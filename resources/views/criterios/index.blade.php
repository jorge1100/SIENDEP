@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto relative">

        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Criterios</h1>
            <a href="/criterios/create" class="btn-primary">
                Nuevo Criterio
            </a>
        </div>

        <div class="card-container">
            <table class="w-full text-left border-collapse text-gray-200">
                <thead class="table-header">
                    <tr>
                        <th class="p-4 font-semibold">ID</th>
                        <th class="p-4 font-semibold">Nombre</th>
                        <th class="p-4 font-semibold">Descripción</th>
                        <th class="p-4 font-semibold">Ponderación</th>
                        <th class="p-4 font-semibold text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    
                    @foreach($criterios as $criterio)
                    <tr class="table-row">
                        <td class="p-4">{{ $criterio->id }}</td>
                        <td class="p-4 font-bold text-white">{{ $criterio->nombre }}</td>
                        <td class="p-4 text-sm">{{ $criterio->descripcion }}</td>
                        <td class="p-4 font-bold text-blue-400">{{ $criterio->ponderacion }}</td>
                        <td class="p-4 flex justify-center gap-2">
                            
                            <a href="/criterios/{{ $criterio->id }}/edit" class="btn-edit">
                                Editar
                            </a>

                            <button type="button" onclick="abrirModalConfirmacion('form-delete-{{ $criterio->id }}')" class="btn-danger">
                                Eliminar
                            </button>

                            <form id="form-delete-{{ $criterio->id }}" action="/criterios/{{ $criterio->id }}" method="POST" style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection