<?php
require_once __DIR__ . '/../config/database.php';
class Matricula {
    private $conn;
    public $estudiante_id, $curso_id, $grado_id, $anio_escolar;
    public function __construct() { $this->conn = (new Database())->getConnection(); }
    public function crear() {
        $sql = "INSERT INTO matriculas (estudiante_id, curso_id, grado_id, anio_escolar, fecha_matricula) VALUES (:est, :cur, :grado, :anio, CURDATE())";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':est'=>$this->estudiante_id, ':cur'=>$this->curso_id, ':grado'=>$this->grado_id, ':anio'=>$this->anio_escolar]);
    }
    public function listar() {
        return $this->conn->query("SELECT m.*, CONCAT(e.apellidos, ', ', e.nombres) AS estudiante, e.dni, c.nombre AS curso, CONCAT(g.nombre, ' \"', g.seccion, '\"') AS seccion FROM matriculas m JOIN estudiantes e ON m.estudiante_id = e.id JOIN cursos c ON m.curso_id = c.id JOIN grados g ON m.grado_id = g.id ORDER BY m.fecha_matricula DESC")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function estudiantes() { return $this->conn->query("SELECT id, dni, CONCAT(apellidos,', ',nombres) AS nombre FROM estudiantes WHERE estado='activo' ORDER BY apellidos")->fetchAll(PDO::FETCH_ASSOC); }
    public function cursos() { return $this->conn->query("SELECT * FROM cursos ORDER BY nombre")->fetchAll(PDO::FETCH_ASSOC); }
    public function grados() { return $this->conn->query("SELECT id, CONCAT(nombre, ' \"', seccion, '\"') AS etiqueta FROM grados ORDER BY CAST(nombre AS UNSIGNED), seccion")->fetchAll(PDO::FETCH_ASSOC); }
}
?>