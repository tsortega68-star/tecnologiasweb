<?php
require_once __DIR__ . '/../models/Libro.php';

class LibroController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Libro();
    }

    public function listar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['action']) && $_POST['action'] === 'crear') {
                $titulo = trim($_POST['titulo']);
                $autor = trim($_POST['autor']);
                $anio = (int)$_POST['anio'];
                if (!empty($titulo) && !empty($autor) && $anio > 0) {
                    $this->modelo->crear($titulo, $autor, $anio);
                }
            } elseif (isset($_POST['action']) && $_POST['action'] === 'eliminar') {
                $id = (int)$_POST['id'];
                if ($id > 0) {
                    $this->modelo->eliminar($id);
                }
            }
            header("Location: index.php");
            exit;
        }

        $libros = $this->modelo->obtenerTodos();
        require_once __DIR__ . '/../views/lista_libros.php';
    }
}
?>
