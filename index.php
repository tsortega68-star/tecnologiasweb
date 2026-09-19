<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mod = $_GET['mod'] ?? 'dashboard';

switch ($mod) {
    case 'dashboard':
        require_once __DIR__ . '/views/dashboard/index.php';
        break;
    case 'login':
        require_once __DIR__ . '/views/login/index.php';
        break;
    case 'carreras':
        require_once __DIR__ . '/views/carreras/index.php';
        break;
    case 'materias':
        require_once __DIR__ . '/views/materias/index.php';
        break;
    case 'usuarios':
        require_once __DIR__ . '/views/usuarios/index.php';
        break;
    case 'tutorias':
        require_once __DIR__ . '/views/tutorias/index.php';
        break;
    case 'evaluaciones':
        require_once __DIR__ . '/views/evaluaciones/index.php';
        break;
    default:
        require_once __DIR__ . '/views/dashboard/index.php';
        break;
}
?>
