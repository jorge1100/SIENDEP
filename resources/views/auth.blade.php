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
    

<!-- 🔥 PANTALLA DE CARGA -->

<div id="splash">
    <div class="splash-content">

        <div class="logo-icon">
            
<svg viewBox="0 0 64 64" width="70" height="70" fill="none" stroke="#3b82f6" stroke-width="2">

    <!-- Documento -->
    <rect x="10" y="8" width="28" height="40" rx="6"></rect>

    <!-- Check -->
    <path d="M16 28 l6 6 l10 -12" />

    <!-- Barras -->
    <rect x="42" y="30" width="4" height="12" fill="#3b82f6"></rect>
    <rect x="48" y="24" width="4" height="18" fill="#3b82f6"></rect>
    <rect x="54" y="18" width="4" height="24" fill="#3b82f6"></rect>

</svg>

        </div>

        <h1>SIENDEP</h1>
        <p>Sistema Integral de Evaluación de Desempeño Para Empresas Privadas</p>

        <div class="loader">
            <div class="loader-bar"></div>
        </div>

        <span class="loading-text">Cargando...</span>

    </div>
</div>

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

    {{-- ✅ ERROR LOGIN --}}
            @if(session('error'))  
             <div class="error-box">
             {{ session('error') }}
             </div>
            @endif

    {{-- ✅ USUARIO --}}
    <div class="input-group">
        <input
            type="text"
            name="usuario"
            placeholder="Usuario"
            required
        >
    </div>

    {{-- ✅ PASSWORD + OJITO --}}
    <div class="input-group">
        <input
            type="password"
            name="password"
            id="password-login"
            placeholder="Contraseña"
            required
        >
        
        
<span class="toggle-password" onclick="togglePassword('password-login', this)">
        <!-- 👁 OJO ABIERTO -->
        <svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"/>
            <circle cx="12" cy="12" r="3"/>
        </svg>

        <!-- 👁‍🗨 OJO CERRADO -->
        <svg class="eye-closed" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="display:none;">
            <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20C5 20 1 12 1 12a21.77 21.77 0 0 1 5.06-7.06"/>
            <path d="M22.54 16.88A21.77 21.77 0 0 0 23 12s-4-8-11-8a10.94 10.94 0 0 0-5.94 1.94"/>
            <line x1="1" y1="1" x2="23" y2="23"/>
        </svg>
    </span>


    </div>

    {{-- ✅ BOTÓN --}}
    <button type="submit">Ingresar</button>

</form>

        </div>

    @else

        <!-- REGISTRO -->
        <div class="auth-card">

            <h2>Crear cuenta</h2>

            @if(session('ok'))
         <div class="ok-box">
            Usuario creado correctamente.<br>
             Redirigiendo al login...
         </div>
         @endif


            <form method="POST" action="/register">
                @csrf

                @error('usuario')
                   <small style="color:red">{{ $message }}</small>
                @enderror

                <input type="text" name="usuario" placeholder="Ingrese su nombre" required  value="{{ old('usuario') }}">
                
                @error('correo')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <input type="email" name="correo" placeholder="Ingrese un correo electrónico" required value="{{ old('correo') }}">

                 @error('password')
                  <small style="color:red">{{ $message }}</small>
                @enderror
               
                
<div class="input-group">
                    <input 
                        type="password" 
                        name="password" 
                        id="password-register"
                        placeholder="Ingrese una contraseña" 
                        required 
                        minlength="6"
                    >
                    <span class="toggle-password" onclick="togglePassword('password-register', this)">
                        <svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        <svg class="eye-closed" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="display:none;">
                            <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20C5 20 1 12 1 12a21.77 21.77 0 0 1 5.06-7.06"/>
                            <path d="M22.54 16.88A21.77 21.77 0 0 0 23 12s-4-8-11-8a10.94 10.94 0 0 0-5.94 1.94"/>
                            <line x1="1" y1="1" x2="23" y2="23"/>
                        </svg>
                    </span>
                </div>

                <div class="input-group">
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        id="password-register-confirm"
                        placeholder="Confirme la contraseña" 
                        required 
                        minlength="6"
                    >
                    <span class="toggle-password" onclick="togglePassword('password-register-confirm', this)">
                        <svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        <svg class="eye-closed" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="display:none;">
                            <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20C5 20 1 12 1 12a21.77 21.77 0 0 1 5.06-7.06"/>
                            <path d="M22.54 16.88A21.77 21.77 0 0 0 23 12s-4-8-11-8a10.94 10.94 0 0 0-5.94 1.94"/>
                            <line x1="1" y1="1" x2="23" y2="23"/>
                        </svg>
                    </span>
                </div>

<small id="password-match-msg" style="display: none; margin-bottom: 10px; font-weight: bold;"></small>
    
    <button type="submit" id="btn-register">Registrarse</button>
            </form>

        </div>

    @endif

</div>

<!-- ✅ FOOTER -->
<footer class="auth-footer">
    <p>© 2026 SIENDEP — Sistema de Evaluación</p>
</footer>




<script>
 
setTimeout(() => {
    const alerta = document.querySelector('.error-toast');
    if (alerta) {
        alerta.style.transition = "0.5s";
        alerta.style.opacity = "0";
        alerta.style.transform = "translateY(-20px)";
    }
}, 3000);

</script>


@if(session('ok'))
<script>
    setTimeout(() => {
        window.location.href = "/?vista=login";
    }, 2000); 
</script>
@endif


<script>
function togglePassword(id, element) {
    const input = document.getElementById(id);

    const eyeOpen = element.querySelector(".eye-open");
    const eyeClosed = element.querySelector(".eye-closed");

    if (input.type === "password") {
        input.type = "text";
        eyeOpen.style.display = "none";
        eyeClosed.style.display = "block";
    } else {
        input.type = "password";
        eyeOpen.style.display = "block";
        eyeClosed.style.display = "none";
    }
}
</script>


<script>
const splash = document.getElementById("splash");


if (performance.navigation.type === 1) {


    setTimeout(() => {
        if (splash) {
            splash.classList.add("hide");
        }
    }, 4000);

} else {

    if (splash) {
        splash.style.display = "none";
    }
}
</script>
<x-password-validator 
    passwordId="password-register" 
    confirmId="password-register-confirm" 
    msgId="password-match-msg" 
    btnId="btn-register" 
/>

</body>
</html>

</body>
</html>