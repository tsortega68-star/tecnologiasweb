<?php
// Controlador: tutorias_crear.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'tutorias_crear.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
