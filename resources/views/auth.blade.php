@php
    $vista = request('vista', 'login');
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/auth.css">
</head>

<body>


{{-- ✅ MENSAJE TOAST --}}
@if(session('error'))
    <div class="error-toast">
        {{ session('error') }}
    </div>
@endif

@if(session('ok'))
    <div class="ok-toast">
        {{ session('ok') }}
    </div>
@endif


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

    <!-- LOGIN -->
    @if($vista === 'login')

        <div class="auth-card">

            <h2>Iniciar sesión</h2>

            <!-- ✅ MENSAJES DENTRO DEL CARD -->
           
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

            <!-- ✅ MENSAJES TAMBIÉN AQUÍ -->
            @if(session('error'))
                
<div class="error-box">
    {{ session('error') }}
</div>

            @endif

            @if(session('ok'))
                <p class="ok">{{ session('ok') }}</p>
            @endif

            <form method="POST" action="/register">
                @csrf

                <input type="text" name="usuario" placeholder="Ingrese su nombre" required>
                <input type="email" name="correo" placeholder="Ingrese un correo electrónico" required>
                <input type="password" name="password" placeholder="Ingrese una contraseña" required>

                <button type="submit">Registrarse</button>
            </form>

        </div>

    @endif

</div>

<!-- ✅ FOOTER -->
<footer class="auth-footer">
    <p>© 2026 SIENDEP — Sistema de Evaluación</p>
</footer>

<!-- ✅ AUTO OCULTAR MENSAJE -->

<script>
 
setTimeout(() => {
    const alerta = document.querySelector('.error-toast, .ok-toast');
    if (alerta) {
        alerta.style.transition = "0.5s";
        alerta.style.opacity = "0";
        alerta.style.transform = "translateY(-20px)";
    }
}, 3000);

</script>


</body>
</html>