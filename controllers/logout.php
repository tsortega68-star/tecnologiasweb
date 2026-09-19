<?php
// Controlador: logout.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'logout.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
