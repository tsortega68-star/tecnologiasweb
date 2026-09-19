<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mod = $_GET['mod'] ?? 'dashboard';

if ($mod === 'libros') {
    require_once __DIR__ . '/views/lista_libros.php';
} else {
    require_once __DIR__ . '/views/dashboard/index.php';
}
?>
