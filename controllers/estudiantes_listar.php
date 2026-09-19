<?php
// Controlador: estudiantes_listar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'estudiantes_listar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
