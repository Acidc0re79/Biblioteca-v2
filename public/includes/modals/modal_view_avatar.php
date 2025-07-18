<?php
// Archivo COMPLETO Y CORREGIDO: /public/includes/modals/modal_view_avatar.php
?>
<div id="viewAvatarModal" class="view-modal">
    <div class="view-modal-content">
        <span class="view-modal-close" onclick="this.parentElement.parentElement.style.display='none'">&times;</span>
        <img id="avatar-full-image" src="" alt="Avatar en tamaño completo">
    </div>
</div>

<style>
    .view-modal {
        display: none; position: fixed; z-index: 2000; left: 0; top: 0;
        width: 100%; height: 100%; overflow: auto;
        background-color: rgba(0,0,0,0.8);
        justify-content: center; align-items: center;
    }
    .view-modal-content {
        position: relative;
        background: none;
        padding: 0;
        border: none;
        width: auto;
    }
    .view-modal-content img {
        max-width: 90vw;
        max-height: 90vh;
        width: auto;
        height: auto;
        border-radius: 50%;
        border: 3px solid #fff;
    }
    .view-modal-close {
        position: absolute; top: 15px; right: 35px; color: #f1f1f1;
        font-size: 40px; font-weight: bold; cursor: pointer;
    }
</style>