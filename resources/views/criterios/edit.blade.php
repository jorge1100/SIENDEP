@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/criterios" class="text-gray-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Editar Criterio</h1>
        </div>

        <div class="bg-gray-800 p-8 rounded-lg shadow-lg border border-gray-700">
            <form method="POST" action="/criterios/{{ $criterio->id }}" class="flex flex-col gap-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Nombre</label>
                    <input type="text" name="nombre" value="{{ $criterio->nombre }}" required class="w-full bg-gray-900 border border-gray-700 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Descripción</label>
                    <textarea name="descripcion" rows="4" required class="w-full bg-gray-900 border border-gray-700 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">{{ $criterio->descripcion }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Ponderación</label>
                    <input type="number" step="0.01" name="ponderacion" value="{{ $criterio->ponderacion }}" required class="w-full bg-gray-900 border border-gray-700 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div class="mt-2 flex justify-end">
                    <button type="submit" class="btn-update">
                        Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection