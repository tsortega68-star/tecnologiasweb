<?php
require_once __DIR__ . '/../config/conexion.php';
class EvaluacionModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT ev.*, t.tema FROM evaluaciones ev JOIN tutorias t ON ev.id_tutoria = t.id ORDER BY ev.fecha DESC")->fetchAll();
    }
}
?>
