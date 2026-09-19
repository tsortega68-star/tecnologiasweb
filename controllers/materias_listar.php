<?php
// Controlador: materias_listar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'materias_listar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
