@extends('layouts.app')

@section('title', 'Nuevo Departamento - SIENDEP')

@section('content')

    <div class="max-w-2xl mx-auto">
        
        <div class="mb-6 flex items-center gap-4">
            <a href="/departamentos" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Nuevo Departamento</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            
            <form method="POST" action="/departamentos">
                @csrf

                <div class="mb-6">
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Nombre del Departamento</label>
                    <input type="text" name="nombre" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                </div>

                <div class="mb-8">
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Descripción</label>
                    <textarea name="descripcion" rows="4" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-6 rounded transition-colors shadow">
                        Guardar Departamento
                    </button>
                </div>

            </form>
            
        </div>
    </div>

@endsection