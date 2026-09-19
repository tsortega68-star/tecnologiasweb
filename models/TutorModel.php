<?php
require_once __DIR__ . '/../config/conexion.php';
class TutorModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT t.*, u.nombre, u.email FROM tutores t JOIN usuarios u ON t.id_usuario = u.id")->fetchAll();
    }
}
?>
