<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function limpiarEntrada($datos) {
    return htmlspecialchars(stripslashes(trim($datos)));
}

function estaAutenticado() {
    return isset($_SESSION['usuario_id']);
}
?>
