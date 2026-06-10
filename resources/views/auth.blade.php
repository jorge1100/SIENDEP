@php
    $vista = request('vista', 'login');
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso</title>

    <!-- Carga de tu CSS -->
    <link rel="stylesheet" href="{{ asset('auth.css') }}">
</head>
<body>

<div class="auth-container">

    <!-- TABS -->
    <div class="auth-tabs">
        <a href="/?vista=login"
           class="tab-btn {{ $vista === 'login' ? 'active' : '' }}">
           Iniciar sesión
        </a>

        <a href="/?vista=registro"
           class="tab-btn {{ $vista === 'registro' ? 'active' : '' }}">
           Registrarse
        </a>
    </div>

    <!-- MENSAJES -->
    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    @if(session('ok'))
        <p class="ok">{{ session('ok') }}</p>
    @endif

    <!-- LOGIN -->
    @if($vista === 'login')

        <div class="auth-card">
            <h2>Iniciar sesión</h2>

            <form method="POST" action="/login">
                @csrf

                <input
                    type="text"
                    name="usuario"
                    placeholder="Usuario"
                    required
                >

                <input
                    type="password"
                    name="password"
                    placeholder="Contraseña"
                    required
                >

                <button type="submit">Ingresar</button>
            </form>
        </div>

    @else

        <!-- REGISTRO -->
        <div class="auth-card">
            <h2>Crear cuenta</h2>

           
<form method="POST" action="/register">
    @csrf

    <input type="text" name="usuario" placeholder="Ingrese su nombre">
    <input type="email" name="correo" placeholder="Ingrese un correo electronico">
    <input type="password" name="password" placeholder="Ingrese una contraseña">

    <button type="submit">Registrarse</button>
</form>

        </div>

    @endif

</div>

</body>
</html>