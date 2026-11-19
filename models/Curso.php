<?php
require_once __DIR__ . '/../config/database.php';
class Curso {
    private $conn;
    public function __construct() { $this->conn = (new Database())->getConnection(); }
    public function listar() { return $this->conn->query("SELECT * FROM cursos ORDER BY id")->fetchAll(PDO::FETCH_ASSOC); }
}
?>