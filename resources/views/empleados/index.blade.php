@extends('layouts.app')

@section('content')

    <div class="mb-6 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Empleados</h1>
        <a href="/empleados/create" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded shadow transition-colors">
            Nuevo Empleado
        </a>
    </div>

    <div class="bg-zinc-800 rounded-lg shadow-lg border border-zinc-600 max-w-6xl mx-auto overflow-hidden">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="bg-zinc-900 border-b border-zinc-600">
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
                <tr class="hover:bg-zinc-700 transition-colors">
                    <td class="p-4">{{ $empleado->id }}</td>
                    <td class="p-4">{{ $empleado->dni }}</td>
                    <td class="p-4 font-bold text-white">{{ $empleado->nombre }}</td>
                    <td class="p-4">{{ $empleado->apellido }}</td>
                    <td class="p-4">{{ $empleado->cargo }}</td>
                    <td class="p-4">{{ $empleado->departamento->nombre }}</td>
                    <td class="p-4 flex justify-center gap-2">
                        
                        <a href="/empleados/{{ $empleado->id }}/edit" class="bg-yellow-600 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm transition-colors">
                            Editar
                        </a>

                        <form action="/empleados/{{ $empleado->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-500 text-white px-3 py-1 rounded text-sm transition-colors">
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