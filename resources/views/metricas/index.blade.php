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
            <h1 class="text-3xl font-bold text-white">Métricas</h1>
            <a href="/metricas/create" class="btn-primary">
                Nueva Métrica
            </a>
        </div>

        <div class="card-container">
            <table class="w-full text-left border-collapse text-zinc-200">
                <thead class="table-header">
                    <tr>
                        <th class="p-4 font-semibold">ID</th>
                        <th class="p-4 font-semibold">Empleado</th>
                        <th class="p-4 font-semibold">Tipo</th>
                        <th class="p-4 font-semibold">Valor</th>
                        <th class="p-4 font-semibold">Fecha</th>
                        <th class="p-4 font-semibold text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-700">
                    
                    @foreach($metricas as $metrica)
                    <tr class="table-row">
                        <td class="p-4">{{ $metrica->id }}</td>
                        <td class="p-4 font-bold text-white">
                            {{ $metrica->empleado->nombre }} 
                            {{ $metrica->empleado->apellido }}
                        </td>
                        <td class="p-4">{{ $metrica->tipo }}</td>
                        <td class="p-4 font-bold text-blue-400">{{ $metrica->valor }}</td>
                        <td class="p-4">{{ $metrica->fecha }}</td>
                        <td class="p-4 flex justify-center gap-2">
                            
                            <a href="/metricas/{{ $metrica->id }}/edit" class="btn-edit">
                                Editar
                            </a>

                            <button type="button" onclick="abrirModalConfirmacion('form-delete-{{ $metrica->id }}')" class="btn-danger">
                                Eliminar
                            </button>

                            <form id="form-delete-{{ $metrica->id }}" action="/metricas/{{ $metrica->id }}" method="POST" style="display:none;">
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