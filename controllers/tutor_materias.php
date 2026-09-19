<?php
// Controlador: tutor_materias.php
require_once __DIR__ . '/../includes/funciones.php';
$mod = explode('_', 'tutor_materias.php')[0];
header("Location: /BibliotecaProyecto/index.php?mod=$mod");
exit;
?>
