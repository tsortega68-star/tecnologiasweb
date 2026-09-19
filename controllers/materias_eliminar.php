<?php
// Controlador: materias_eliminar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'materias_eliminar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
