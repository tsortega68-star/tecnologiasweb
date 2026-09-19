<?php
require_once __DIR__ . '/../config/conexion.php';
class CarreraModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT * FROM carreras ORDER BY nombre ASC")->fetchAll();
    }
    public function crear($nombre, $codigo) {
        $stmt = $this->db->prepare("INSERT INTO carreras (nombre, codigo) VALUES (?, ?)");
        return $stmt->execute([$nombre, $codigo]);
    }
    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM carreras WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
