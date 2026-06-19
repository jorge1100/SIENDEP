@if(session('success') || session('error'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function mostrarNotificacionExito(mensaje) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: mensaje,
                background: '#1f2937',     
                color: '#f3f4f6',           
                timer: 3500,
                timerProgressBar: true,
                showConfirmButton: false,
                width: 'auto',
                padding: '0.5rem 1rem',
                animation: false,
                customClass: {
                    popup: 'rounded-none border border-green-500/50 text-sm mt-4 mr-4 shadow-md'
                }
            });
        }

        function mostrarNotificacionError(mensaje) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: mensaje,
                background: '#1f2937',     
                color: '#f3f4f6',
                timer: 4000,
                timerProgressBar: true,
                showConfirmButton: false,
                width: 'auto',
                padding: '0.5rem 1rem',
                animation: false,
                customClass: {
                    popup: 'rounded-none border border-red-500/50 text-sm mt-4 mr-4 shadow-md'
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                mostrarNotificacionExito('{{ session('success') }}');
            @endif

            @if(session('error'))
                mostrarNotificacionError('{{ session('error') }}');
            @endif
        });
    </script>
@endif