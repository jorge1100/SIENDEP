<div id="modal-confirmacion" class="hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50 transition-opacity">
    <div class="bg-zinc-800 p-6 rounded-lg shadow-xl border border-zinc-600 max-w-sm w-full text-center">
        
        <svg class="w-16 h-16 text-red-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
        </svg>

        <h3 class="text-xl font-bold text-white mb-2">¿Estás seguro?</h3>
        <p class="text-zinc-400 mb-6 text-sm">Esta acción eliminará el registro permanentemente y no se puede deshacer.</p>
        
        <div class="flex justify-center gap-4">
            <button type="button" onclick="cerrarModalConfirmacion()" class="bg-zinc-600 hover:bg-zinc-500 text-white font-bold py-2 px-4 rounded transition-colors shadow">
                Cancelar
            </button>
            <button type="button" onclick="confirmarEliminacion()" class="bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded transition-colors shadow">
                Sí, eliminar
            </button>
        </div>
    </div>
</div>

<script>
    let formToSubmitId = null;

    function abrirModalConfirmacion(formId) {
        formToSubmitId = formId;
        document.getElementById('modal-confirmacion').classList.remove('hidden');
    }

    function cerrarModalConfirmacion() {
        formToSubmitId = null;
        document.getElementById('modal-confirmacion').classList.add('hidden');
    }

    function confirmarEliminacion() {
        if (formToSubmitId) {
            document.getElementById(formToSubmitId).submit();
        }
    }
</script>