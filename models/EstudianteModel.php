<?php
require_once __DIR__ . '/../config/conexion.php';
class EstudianteModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT e.*, u.nombre, u.email, c.nombre AS carrera FROM estudiantes e JOIN usuarios u ON e.id_usuario = u.id JOIN carreras c ON e.id_carrera = c.id")->fetchAll();
    }
}
?>
