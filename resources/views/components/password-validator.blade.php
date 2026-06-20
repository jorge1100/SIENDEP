@props([
    'passwordId' => 'password-register',
    'confirmId' => 'password-register-confirm',
    'msgId' => 'password-match-msg',
    'btnId' => 'btn-register'
])

<script>
document.addEventListener('DOMContentLoaded', function() {
    const passInput = document.getElementById('{{ $passwordId }}');
    const confirmInput = document.getElementById('{{ $confirmId }}');
    const matchMsg = document.getElementById('{{ $msgId }}');
    const registerBtn = document.getElementById('{{ $btnId }}');

    if (!passInput || !confirmInput || !matchMsg || !registerBtn) return;

    function checkPasswords() {
        const pass1 = passInput.value;
        const pass2 = confirmInput.value;

        if (pass2.length > 0) {
            if (pass1 === pass2) {
                matchMsg.style.display = 'block';
                matchMsg.style.color = '#4ade80'; // Verde
                matchMsg.textContent = '✓ Las contraseñas coinciden';
                
                registerBtn.disabled = false;
                registerBtn.style.opacity = '1';
                registerBtn.style.cursor = 'pointer';
            } else {
                matchMsg.style.display = 'block';
                matchMsg.style.color = '#f87171'; // Rojo
                matchMsg.textContent = '✗ Las contraseñas no coinciden';
                
                registerBtn.disabled = true;
                registerBtn.style.opacity = '0.5';
                registerBtn.style.cursor = 'not-allowed';
            }
        } else {
            matchMsg.style.display = 'none';
            registerBtn.disabled = false;
            registerBtn.style.opacity = '1';
            registerBtn.style.cursor = 'pointer';
        }
    }

    passInput.addEventListener('input', checkPasswords);
    confirmInput.addEventListener('input', checkPasswords);
});
</script>