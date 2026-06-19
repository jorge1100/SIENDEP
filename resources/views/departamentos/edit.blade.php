@extends('layouts.app')

@section('title', 'Editar Departamento - SIENDEP')

@section('content')

    <div class="max-w-2xl mx-auto">
        
        <div class="mb-6 flex items-center gap-4">
            <a href="/departamentos" class="text-gray-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Editar Departamento</h1>
        </div>

        <div class="bg-gray-800 p-8 rounded-lg shadow-lg border border-gray-700">
            
            <form method="POST" action="/departamentos/{{ $departamento->id }}">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-300 mb-2">Nombre del Departamento</label>
                    <input type="text" name="nombre" value="{{ $departamento->nombre }}" required class="w-full bg-gray-900 border border-gray-700 rounded p-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                </div>

                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-300 mb-2">Descripción</label>
                    <textarea name="descripcion" rows="4" required class="w-full bg-gray-900 border border-gray-700 rounded p-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">{{ $departamento->descripcion }}</textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="btn-update">
                        Actualizar Departamento
                    </button>
                </div>

            </form>
            
        </div>
    </div>

@endsection