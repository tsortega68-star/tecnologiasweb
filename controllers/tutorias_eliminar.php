<?php
// Controlador: tutorias_eliminar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'tutorias_eliminar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
