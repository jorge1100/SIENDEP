@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto relative">

        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Autoevaluaciones</h1>
            <a href="/autoevaluaciones/create" class="btn-primary">
                Nueva Autoevaluación
            </a>
        </div>

        <div class="card-container">
            <table class="w-full text-left border-collapse text-gray-200">
                <thead class="table-header">
                    <tr>
                        <th class="p-4 font-semibold">ID</th>
                        <th class="p-4 font-semibold">Empleado</th>
                        <th class="p-4 font-semibold">Periodo</th>
                        <th class="p-4 font-semibold">Puntaje</th>
                        <th class="p-4 font-semibold">Comentarios</th>
                        <th class="p-4 font-semibold text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    
                    @foreach($autoevaluaciones as $autoevaluacion)
                    <tr class="table-row">
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

                            <button type="button" onclick="abrirModalConfirmacion('form-delete-{{ $autoevaluacion->id }}')" class="btn-danger">
                                Eliminar
                            </button>

                            <form id="form-delete-{{ $autoevaluacion->id }}" action="/autoevaluaciones/{{ $autoevaluacion->id }}" method="POST" style="display:none;">
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