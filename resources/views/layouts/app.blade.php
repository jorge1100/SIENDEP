<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIENDEP')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-700">



@if(session()->has('id_usuario'))
    <div class="absolute top-5 right-5 bg-zinc-800 px-4 py-2 rounded-lg shadow text-white text-right">

        <p class="font-semibold">
            Hola {{ session('nombre_usuario') }}
        </p>

        <a href="{{ url('/logout') }}" class="text-red-400 hover:text-red-500 text-sm">
            Cerrar sesión
        </a>

    </div>
@endif



    <header class="bg-zinc-900 px-8 py-4 flex flex-col items-start justify-start">

        <a href="/" class="font-bold text-white text-2xl">
            SIENDEP
        </a>

        <p class="font-bold text-zinc-400 text-xs mt-1">
            Sistema Integral de Evaluación y Notas de Desempeño.
        </p>

        <nav class="font-bold text-white mt-4 py-4 flex flex-wrap justify-center items-center gap-6 w-full">
           

            <a href="/departamentos" class="enlace-menu">
                Departamentos
            </a>

            <a href="/empleados" class="enlace-menu">
                Empleados
            </a>

            <a href="/criterios" class="enlace-menu">
                Criterios
            </a>

            <a href="/periodos" class="enlace-menu">
                Períodos
            </a>

            <a href="/evaluaciones" class="enlace-menu">
                Evaluaciones
            </a>

            <a href="/detalle-evaluaciones" class="enlace-menu">
                Detalle Evaluaciones
            </a>

            <a href="/autoevaluaciones" class="enlace-menu">
                Autoevaluaciones
            </a>

            <a href="/metricas" class="enlace-menu">
                Métricas
            </a>
        </nav>
    </header>

    <main class="p-6">
        @yield('content')
    </main>

</body>

</html>
