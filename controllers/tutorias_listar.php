<?php
// Controlador: tutorias_listar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'tutorias_listar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
