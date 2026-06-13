@extends('layouts.app')

@section('title', 'Panel de Control - SIENDEP')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-50">Inicio - Panel de control</h1>
        <p class="text-gray-300 text-sm mt-2">Bienvenido, {{ session('nombre_usuario') }}. Desde aquí puedes gestionar la
            estructura organizativa y el personal.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Departamentos</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Administra las áreas de la empresa.</p>
            <a href="/departamentos"
                class="w-full px-4 py-2 font-semibold text-white transition-colors rounded-lg bg-blue-600 hover:bg-blue-700 text-center">
                Gestionar
            </a>
        </div>

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Empleados</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Registra, modifica y administra el personal.</p>
            <a href="/empleados"
                class="w-full px-4 py-2 font-semibold text-white transition-colors rounded-lg bg-blue-600 hover:bg-blue-700 text-center">
                Gestionar
            </a>
        </div>

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Criterios</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Define los parámetros de evaluación.</p>
            <a href="/criterios"
                class="w-full px-4 py-2 font-semibold text-white transition-colors rounded-lg bg-blue-600 hover:bg-blue-700 text-center">
                Gestionar
            </a>
        </div>

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Períodos</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Configura los ciclos de evaluación.</p>
            <a href="/periodos"
                class="w-full px-4 py-2 font-semibold text-white transition-colors rounded-lg bg-blue-600 hover:bg-blue-700 text-center">
                Gestionar
            </a>
        </div>

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Evaluaciones</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Gestión principal de notas y desempeño.</p>
            <a href="/evaluaciones"
                class="w-full px-4 py-2 font-semibold text-white transition-colors rounded-lg bg-blue-600 hover:bg-blue-700 text-center">
                Gestionar
            </a>
        </div>

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Detalles Evaluaciones</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Revisa a fondo cada evaluación.</p>
            <a href="/detalle-evaluaciones"
                class="w-full px-4 py-2 font-semibold text-white transition-colors rounded-lg bg-blue-600 hover:bg-blue-700 text-center">
                Gestionar
            </a>
        </div>

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" stroke-linecap="round" stroke-linejoin="round" />
                    <polyline points="16 11 18 13 22 9" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Autoevaluaciones</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Formularios completados por el personal.</p>
            <a href="/autoevaluaciones"
                class="w-full px-4 py-2 font-semibold text-white transition-colors rounded-lg bg-blue-600 hover:bg-blue-700 text-center">
                Gestionar
            </a>
        </div>

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Métricas</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Estadísticas y resultados globales.</p>
            <a href="/metricas"
                class="w-full px-4 py-2 font-semibold transition-colors bg-transparent border rounded-lg text-gray-100 border-blue-800 hover:bg-blue-600 hover:text-white text-center">
                Visualizar
            </a>
        </div>

        <div class="flex flex-col items-center p-6 text-center border shadow-lg bg-gray-700 rounded-xl border-gray-600/30">
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-gray-800 text-blue-400">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 3v16.5M21 19.5H3.75M6.75 15v-3m3.375 3V9.75m3.375 3V6.75m3.375 8.25v-6.75" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-50 mb-2">Reportes</h3>
            <p class="text-sm text-gray-300 mb-6 grow">Evaluaciones, promedios y ranking de empleados.</p>
            <a href="/reportes"
                class="w-full px-4 py-2 font-semibold transition-colors bg-transparent border rounded-lg text-gray-100 border-blue-800 hover:bg-blue-600 hover:text-white text-center">
                Visualizar
            </a>
        </div>

    </div>
@endsection
