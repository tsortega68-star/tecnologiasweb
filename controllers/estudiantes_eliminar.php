<?php
// Controlador: estudiantes_eliminar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'estudiantes_eliminar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
