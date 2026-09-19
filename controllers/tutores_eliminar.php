<?php
// Controlador: tutores_eliminar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'tutores_eliminar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
