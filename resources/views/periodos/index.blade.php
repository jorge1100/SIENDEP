@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto relative">
        
        <!-- Alertas de éxito o error -->
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
            <h1 class="text-3xl font-bold text-white">Períodos de Evaluación</h1>
            <a href="/periodos/create" class="btn-primary">
                Nuevo Período
            </a>
        </div>

        <div class="card-container">
            <table class="w-full text-left border-collapse text-zinc-200">
                <thead class="table-header">
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
                    <tr class="table-row">
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

                            <button type="button" onclick="abrirModalConfirmacion('form-delete-{{ $periodo->id }}')" class="btn-danger">
                                Eliminar
                            </button>

                            <form id="form-delete-{{ $periodo->id }}" action="/periodos/{{ $periodo->id }}" method="POST" style="display:none;">
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