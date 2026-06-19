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
            <h1 class="text-3xl font-bold text-white">Evaluaciones</h1>
            <a href="/evaluaciones/create" class="btn-primary">
                Nueva Evaluación
            </a>
        </div>

        <div class="card-container">
            <table class="w-full text-left border-collapse text-zinc-200">
                <thead class="table-header">
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
                    <tr class="table-row">
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

                            <button type="button" onclick="abrirModalConfirmacion('form-delete-{{ $evaluacion->id }}')" class="btn-danger">
                                Eliminar
                            </button>

                            <form id="form-delete-{{ $evaluacion->id }}" action="/evaluaciones/{{ $evaluacion->id }}" method="POST" style="display:none;">
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