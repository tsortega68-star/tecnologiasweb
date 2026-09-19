<?php
// Controlador: login_procesar.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'login_procesar.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
