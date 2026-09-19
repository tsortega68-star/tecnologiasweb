<?php
require_once __DIR__ . '/../config/conexion.php';
class TutorMateriaModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT tm.*, u.nombre AS tutor, m.nombre AS materia FROM tutor_materias tm JOIN tutores t ON tm.id_tutor = t.id JOIN usuarios u ON t.id_usuario = u.id JOIN materias m ON tm.id_materia = m.id")->fetchAll();
    }
}
?>
