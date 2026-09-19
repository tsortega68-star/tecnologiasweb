<?php
require_once __DIR__ . '/funciones.php';

if (!estaAutenticado()) {
    header("Location: /BibliotecaProyecto/index.php?mod=login");
    exit;
}
?>
