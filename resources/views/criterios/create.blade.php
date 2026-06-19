@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/criterios" class="text-gray-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Nuevo Criterio</h1>
        </div>

        <div class="bg-gray-900 p-8 rounded-lg shadow-lg border border-gray-700">
            <form method="POST" action="/criterios" class="flex flex-col gap-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Nombre</label>
                    <input type="text" name="nombre" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Descripción</label>
                    <textarea name="descripcion" rows="4" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Ponderación</label>
                    <input type="number" step="0.01" name="ponderacion" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div class="mt-2 flex justify-end">
                    <button type="submit" class="btn-save">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection