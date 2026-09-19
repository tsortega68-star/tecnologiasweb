<?php
require_once __DIR__ . '/../config/conexion.php';
class UsuarioModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }
    public function obtenerTodos() {
        return $this->db->query("SELECT u.*, r.nombre AS rol FROM usuarios u JOIN roles r ON u.id_rol = r.id ORDER BY u.id DESC")->fetchAll();
    }
    public function buscarPorEmail($email) {
        $stmt = $this->db->prepare("SELECT u.*, r.nombre AS rol FROM usuarios u JOIN roles r ON u.id_rol = r.id WHERE u.email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}
?>
