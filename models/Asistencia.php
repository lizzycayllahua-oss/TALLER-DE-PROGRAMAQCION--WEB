<?php
require_once __DIR__ . '/../config/database.php';
class Asistencia {
    private $conn;
    public $estudiante_id, $curso_id, $grado_id, $fecha, $estado;
    public function __construct() { $this->conn = (new Database())->getConnection(); }
    public function registrar() {
        $sql = "INSERT INTO asistencias (estudiante_id, curso_id, grado_id, fecha, estado) VALUES (:est, :cur, :grado, :fecha, :estado) ON DUPLICATE KEY UPDATE estado = :estado";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':est'=>$this->estudiante_id, ':cur'=>$this->curso_id, ':grado'=>$this->grado_id, ':fecha'=>$this->fecha, ':estado'=>$this->estado]);
    }
    public function listar($fecha) {
        $stmt = $this->conn->prepare("SELECT a.*, CONCAT(e.apellidos, ', ', e.nombres) AS estudiante, c.nombre AS curso, CONCAT(g.nombre, ' \"', g.seccion, '\"') AS seccion FROM asistencias a JOIN estudiantes e ON a.estudiante_id = e.id JOIN cursos c ON a.curso_id = c.id JOIN grados g ON a.grado_id = g.id WHERE a.fecha = :fecha ORDER BY e.apellidos");
        $stmt->execute([':fecha'=>$fecha]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function estudiantesPorGrado($grado_id) {
        $stmt = $this->conn->prepare("SELECT id, CONCAT(apellidos,', ',nombres) AS nombre FROM estudiantes WHERE grado_id = :g AND estado='activo' ORDER BY apellidos");
        $stmt->execute([':g'=>$grado_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function cursos() { return $this->conn->query("SELECT * FROM cursos ORDER BY nombre")->fetchAll(PDO::FETCH_ASSOC); }
    public function grados() { return $this->conn->query("SELECT id, CONCAT(nombre, ' \"', seccion, '\"') AS etiqueta FROM grados ORDER BY CAST(nombre AS UNSIGNED), seccion")->fetchAll(PDO::FETCH_ASSOC); }
}
?>