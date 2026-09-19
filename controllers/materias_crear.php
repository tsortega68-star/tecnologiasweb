<?php
// Controlador: materias_crear.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'materias_crear.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
