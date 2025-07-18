<?php
// Archivo COMPLETO Y CORREGIDO: /public/includes/modals/modal_view_insignia.php
?>
<div id="viewInsigniaModal" class="view-modal">
    <div class="view-modal-content-insignia">
        <span class="view-modal-close" onclick="this.parentElement.parentElement.style.display='none'">&times;</span>
        <h5 id="insignia-modal-nombre">Nombre de la Insignia</h5>
        <div class="view-modal-body">
            <img id="insignia-modal-imagen" src="" alt="Insignia en tamaño completo">
            <p id="insignia-modal-descripcion">Descripción de la insignia.</p>
        </div>
    </div>
</div>

<style>
    /* Usamos el mismo estilo base que el modal de avatar para consistencia */
    .view-modal-content-insignia {
        position: relative;
        background-color: #2c2c2d;
        margin: auto;
        padding: 20px;
        border: 1px solid #555;
        width: 90%;
        max-width: 400px;
        border-radius: 8px;
        text-align: center;
        color: #e0e0e0;
    }
    .view-modal-content-insignia h5 {
        margin-top: 0;
        border-bottom: 1px solid #555;
        padding-bottom: 10px;
    }
    .view-modal-content-insignia .view-modal-body img {
        max-width: 256px;
        margin-bottom: 1rem;
    }
    .view-modal-content-insignia .view-modal-body p {
        color: #ccc;
    }
</style>