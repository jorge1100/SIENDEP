@extends('layouts.app')

@section('title', 'Departamentos - SIENDEP')

@section('content')

    <div class="mb-6 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-white">Departamentos</h1>
        <a href="/departamentos/create" class="btn-primary">
            + Nuevo Departamento
        </a>
    </div>

    <div class="card-container">
        <table class="w-full text-left border-collapse text-zinc-200">
            <thead class="table-header">
                <tr>
                    <th class="p-4 font-semibold">ID</th>
                    <th class="p-4 font-semibold">Nombre</th>
                    <th class="p-4 font-semibold">Descripción</th>
                    <th class="p-4 font-semibold text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-700">
                
                @foreach($departamentos as $departamento)
                <tr class="table-row">
                    <td class="p-4">{{ $departamento->id }}</td>
                    <td class="p-4 font-bold text-white">{{ $departamento->nombre }}</td>
                    <td class="p-4 text-sm">{{ $departamento->descripcion }}</td>
                    <td class="p-4 flex justify-center gap-2">
                        
                       <a href="/departamentos/{{ $departamento->id }}/edit"
   class="btn-edit">
    Editar
</a>

                        <form action="/departamentos/{{ $departamento->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
    class="btn-danger">
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