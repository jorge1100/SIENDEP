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
            <h1 class="text-3xl font-bold text-white">Empleados</h1>
            <a href="/empleados/create" class="btn-primary">
                Nuevo Empleado
            </a>
        </div>

        <div class="card-container">
            <table class="w-full text-left border-collapse text-zinc-200">
                <thead class="table-header">
                    <tr>
                        <th class="p-4 font-semibold">ID</th>
                        <th class="p-4 font-semibold">DNI</th>
                        <th class="p-4 font-semibold">Nombre</th>
                        <th class="p-4 font-semibold">Apellido</th>
                        <th class="p-4 font-semibold">Cargo</th>
                        <th class="p-4 font-semibold">Departamento</th>
                        <th class="p-4 font-semibold text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-700">
                    
                    @foreach($empleados as $empleado)
                    <tr class="table-row">
                        <td class="p-4">{{ $empleado->id }}</td>
                        <td class="p-4">{{ $empleado->dni }}</td>
                        <td class="p-4 font-bold text-white">{{ $empleado->nombre }}</td>
                        <td class="p-4">{{ $empleado->apellido }}</td>
                        <td class="p-4">{{ $empleado->cargo }}</td>
                        <td class="p-4">{{ $empleado->departamento->nombre }}</td>
                        <td class="p-4 flex justify-center gap-2">
                            
                            <a href="/empleados/{{ $empleado->id }}/edit" class="btn-edit">
                                Editar
                            </a>

                            <!-- ✅ Conectado al Modal Global, manteniendo tu clase btn-danger -->
                            <button type="button" onclick="abrirModalConfirmacion('form-delete-{{ $empleado->id }}')" class="btn-danger">
                                Eliminar
                            </button>

                            <form id="form-delete-{{ $empleado->id }}" action="/empleados/{{ $empleado->id }}" method="POST" style="display:none;">
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