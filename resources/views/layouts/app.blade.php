<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIENDEP')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-800">

<nav class="flex items-center px-6 py-3 border-b bg-gray-900 border-gray-700 gap-8">
            <div class="flex items-center gap-3 text-2xl font-bold text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M5.625 3.75a2.625 2.625 0 1 0 0 5.25h12.75a2.625 2.625 0 0 0 0-5.25H5.625ZM3.75 11.25a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75ZM3 15.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75ZM3.75 18.75a.75.75 0 0 0 0 1.5h16.5a.75.75 0 0 0 0-1.5H3.75Z" />
                </svg>
                <a href="/home" class="font-bold text-white text-2xl">
                    SIENDEP
                </a>
            </div>
            
            <div class="hidden ml-10 text-sm text-gray-400 lg:flex gap-6 items-center">
                <a href="/departamentos" class="hover:text-zinc-50 transition-colors">Departamentos</a>
                <a href="/empleados" class="hover:text-zinc-50 transition-colors">Empleados</a>
                <a href="/criterios" class="hover:text-zinc-50 transition-colors">Criterios</a>
                <a href="/periodos" class="hover:text-zinc-50 transition-colors">Períodos</a>
                <a href="/evaluaciones" class="hover:text-zinc-50 transition-colors">Evaluaciones</a>
                <a href="/detalle-evaluaciones" class="hover:text-zinc-50 transition-colors">Detalle Evaluaciones</a>
                <a href="/autoevaluaciones" class="transition-colors hover:text-zinc-50">Autoevaluaciones</a>
                <a href="/metricas" class="hover:text-zinc-50 transition-colors">Métricas</a>

                <div class="relative group flex items-center">
                    <a href="{{ url('/reportes') }}" class="hover:text-zinc-50 transition-colors flex items-center gap-1">
                        Reportes
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 mt-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>
                    <div class="absolute left-0 top-full z-50 hidden mt-2 w-56 rounded-lg border border-gray-700 bg-gray-900 shadow-lg group-hover:block">
                        <a href="{{ url('/reportes/evaluaciones') }}" class="block px-4 py-3 text-sm text-gray-200 hover:bg-gray-700 rounded-t-lg">Reporte de Evaluaciones</a>
                        <a href="{{ url('/reportes/ranking') }}" class="block px-4 py-3 text-sm text-gray-200 hover:bg-gray-700">Ranking de Empleados</a>
                        <a href="{{ url('/reportes/promedio') }}" class="block px-4 py-3 text-sm text-gray-200 hover:bg-gray-700 rounded-b-lg">Promedio por Empleado</a>
                    </div>
                </div>
            </div>

            @if (session()->has('id_usuario'))
                <div class="flex items-center ml-auto px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg shadow-md gap-4">
                    
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <span class="font-bold text-gray-50 text-sm">
                            {{ session('nombre_usuario') }}
                        </span>
                    </div>

                    <div class="h-6 w-px bg-gray-600"></div> <div class="relative group flex items-center cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-400 hover:text-white transition-colors">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>

        <div class="absolute right-0 top-full z-50 hidden pt-2 w-48 group-hover:block">
            
            <div class="rounded-lg border border-gray-700 bg-gray-900 shadow-lg">
                <a href="{{ url('/logout') }}" class="block px-4 py-3 text-sm font-semibold text-red-500 hover:bg-gray-700 hover:text-red-400 transition-colors rounded-lg">
                    Cerrar sesión
                </a>
            </div>

        </div>
    </div>
            @endif
        </nav>

        <main class="px-8 py-8 mx-auto">
            @yield('content')
        </main>

        @include('components.modal-confirmacion')
        @include('components.alertas')
    </div>
</body>

</html>
