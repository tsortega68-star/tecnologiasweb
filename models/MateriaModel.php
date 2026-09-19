<?php
require_once __DIR__ . '/../config/conexion.php';
class MateriaModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT m.*, c.nombre AS carrera FROM materias m JOIN carreras c ON m.id_carrera = c.id ORDER BY m.nombre ASC")->fetchAll();
    }
}
?>
