<?php
$config_file = __DIR__ . '/../config/conexion.php';
if (file_exists($config_file)) {
    require_once $config_file;
} else {
    require_once __DIR__ . '/../config/db.php';
}

class DashboardModel {
    private $db;
    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->pdo;
    }

    public function obtenerEstadisticas() {
        $stats = [];
        try {
            $stats['carreras'] = $this->db->query("SELECT COUNT(*) FROM carreras")->fetchColumn();
        } catch (Exception $e) { $stats['carreras'] = 0; }
        try {
            $stats['materias'] = $this->db->query("SELECT COUNT(*) FROM materias")->fetchColumn();
        } catch (Exception $e) { $stats['materias'] = 0; }
        try {
            $stats['usuarios'] = $this->db->query("SELECT COUNT(*) FROM usuarios")->fetchColumn();
        } catch (Exception $e) { $stats['usuarios'] = 0; }
        try {
            $stats['tutorias'] = $this->db->query("SELECT COUNT(*) FROM tutorias")->fetchColumn();
        } catch (Exception $e) { $stats['tutorias'] = 0; }
        try {
            $stats['promedio_calificacion'] = $this->db->query("SELECT COALESCE(ROUND(AVG(calificacion), 1), 0) FROM evaluaciones")->fetchColumn();
        } catch (Exception $e) { $stats['promedio_calificacion'] = 0; }
        return $stats;
    }

    public function obtenerUltimasTutorias() {
        try {
            $stmt = $this->db->query("SELECT tut.*, u_e.nombre AS estudiante, u_t.nombre AS tutor, m.nombre AS materia FROM tutorias tut JOIN estudiantes e ON tut.id_estudiante = e.id JOIN usuarios u_e ON e.id_usuario = u_e.id JOIN tutores t ON tut.id_tutor = t.id JOIN usuarios u_t ON t.id_usuario = u_t.id JOIN materias m ON tut.id_materia = m.id ORDER BY tut.id DESC LIMIT 5");
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return [];
        }
    }
}
?>
