<?php
if (!class_exists('Conexion')) {
    class Conexion {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db   = "sistema_tutorias";
        private $charset = "utf8mb4";
        public $pdo;

        public function __construct() {
            $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            try {
                $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
            } catch (PDOException $e) {
                try {
                    $this->pdo = new PDO($dsn, "biblioteca_user", "12345", $options);
                } catch (PDOException $ex) {
                    try {
                        $dsn_test = "mysql:host={$this->host};dbname=testdb;charset={$this->charset}";
                        $this->pdo = new PDO($dsn_test, "biblioteca_user", "12345", $options);
                    } catch (PDOException $e3) {
                        die("Error de conexión a la BD: " . $e3->getMessage());
                    }
                }
            }
        }
    }
}

if (!class_exists('Database')) {
    class Database {
        public function getConnection() {
            $conexion = new Conexion();
            return $conexion->pdo;
        }
    }
}
?>
