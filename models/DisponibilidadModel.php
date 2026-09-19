<?php
require_once __DIR__ . '/../config/conexion.php';
class DisponibilidadModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT d.*, u.nombre AS tutor FROM disponibilidad d JOIN tutores t ON d.id_tutor = t.id JOIN usuarios u ON t.id_usuario = u.id")->fetchAll();
    }
}
?>
