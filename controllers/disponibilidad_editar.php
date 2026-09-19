<?php
// Controlador: disponibilidad_editar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'disponibilidad_editar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
