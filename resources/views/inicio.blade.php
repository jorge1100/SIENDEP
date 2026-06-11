@extends('layouts.app')

@section('title', 'Panel de Control - SIENDEP')

@section('content')
    <div>
        <h1 class="text-white font-bold text-2xl">Inicio - Panel de control</h1>
        <p class="text-zinc-300 text-sm mt-2">Bienvenido, {{ auth()->user()->name ?? 'Administrador' }}. Desde aquí puedes gestionar la estructura organizativa y el personal.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-8">

        <div class="tarjetas-inicio">
            <h3 class="text-xl font-bold text-white">Departamentos</h3>
            <p class="text-zinc-300 mt-2 text-center text-sm">Administra las áreas de la empresa.</p>
            <a href="/departamentos" class="tarjetas-links">Gestionar</a>
        </div>

        <div class="tarjetas-inicio">
            <h3 class="text-xl font-bold text-white">Empleados</h3>
            <p class="text-zinc-300 mt-2 text-center text-sm">Registra, modifica y administra el personal.</p>
            <a href="/empleados" class="tarjetas-links">Gestionar</a>
        </div>

        <div class="tarjetas-inicio">
            <h3 class="text-xl font-bold text-white">Criterios</h3>
            <p class="text-zinc-300 mt-2 text-center text-sm">Define los parámetros de evaluación.</p>
            <a href="/criterios" class="tarjetas-links">Gestionar</a>
        </div>

        <div class="tarjetas-inicio">
            <h3 class="text-xl font-bold text-white">Períodos</h3>
            <p class="text-zinc-300 mt-2 text-center text-sm">Configura los ciclos de evaluación.</p>
            <a href="/periodos" class="tarjetas-links">Gestionar</a>
        </div>

        <div class="tarjetas-inicio">
            <h3 class="text-xl font-bold text-white">Evaluaciones</h3>
            <p class="text-zinc-300 mt-2 text-center text-sm">Gestión principal de notas y desempeño.</p>
            <a href="/evaluaciones" class="tarjetas-links">Gestionar</a>
        </div>

        <div class="tarjetas-inicio">
            <h3 class="text-xl font-bold text-white">Detalles</h3>
            <p class="text-zinc-300 mt-2 text-center text-sm">Revisa a fondo cada evaluación.</p>
            <a href="/detalle-evaluaciones" class="tarjetas-links">Gestionar</a>
        </div>

        <div class="tarjetas-inicio">
            <h3 class="text-xl font-bold text-white">Autoevaluaciones</h3>
            <p class="text-zinc-300 mt-2 text-center text-sm">Formularios completados por el personal.</p>
            <a href="/autoevaluaciones" class="tarjetas-links">Gestionar</a>
        </div>

        <div class="tarjetas-inicio">
            <h3 class="text-xl font-bold text-white">Métricas</h3>
            <p class="text-zinc-300 mt-2 text-center text-sm">Estadísticas y resultados globales.</p>
            <a href="/metricas" class="tarjetas-links">Visualizar</a>
        </div>

    </div>

@endsection