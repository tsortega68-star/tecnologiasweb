<?php
require_once __DIR__ . '/../config/conexion.php';
class RolModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT * FROM roles ORDER BY id ASC")->fetchAll();
    }
}
?>
