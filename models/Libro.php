<?php
require_once __DIR__ . '/../config/db.php';

class Libro {
    private $conn;
    private $table_name = "libros";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function obtenerTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        return $this->conn->query($query);
    }

    public function crear($titulo, $autor, $anio) {
        $stmt = $this->conn->prepare("INSERT INTO " . $this->table_name . " (titulo, autor, anio) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $titulo, $autor, $anio);
        return $stmt->execute();
    }

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM " . $this->table_name . " WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
