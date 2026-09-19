<?php
// Controlador: estudiantes_crear.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'estudiantes_crear.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
