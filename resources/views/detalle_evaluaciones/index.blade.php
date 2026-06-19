@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto relative">
        
        @if(session('success'))
            <div class="bg-green-500/20 border border-green-500 text-green-400 p-4 rounded mb-6 shadow-lg">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-500/20 border border-red-500 text-red-400 p-4 rounded mb-6 shadow-lg">
                {{ session('error') }}
            </div>
        @endif

        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Detalle Evaluaciones</h1>
            <a href="/detalle-evaluaciones/create" class="btn-primary">
                Nuevo Registro
            </a>
        </div>

        <div class="card-container">
            <table class="w-full text-left border-collapse text-zinc-200">
                <thead class="table-header">
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
                    <tr class="table-row">
                        <td class="p-4">{{ $detalle->id }}</td>
                        <td class="p-4">{{ $detalle->evaluacion_id }}</td>
                        <td class="p-4 font-bold text-white">{{ $detalle->criterio->nombre }}</td>
                        <td class="p-4 font-bold text-blue-400">{{ $detalle->calificacion }}</td>
                        <td class="p-4 text-sm">{{ $detalle->comentario }}</td>
                        <td class="p-4 flex justify-center gap-2">
                            
                            <a href="/detalle-evaluaciones/{{ $detalle->id }}/edit" class="btn-edit">
                                Editar
                            </a>

                            <button type="button" onclick="abrirModalConfirmacion('form-delete-{{ $detalle->id }}')" class="btn-danger">
                                Eliminar
                            </button>

                            <form id="form-delete-{{ $detalle->id }}" action="/detalle-evaluaciones/{{ $detalle->id }}" method="POST" style="display:none;">
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