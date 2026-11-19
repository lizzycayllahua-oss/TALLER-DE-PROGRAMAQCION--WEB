<?php
require_once __DIR__ . '/../config/database.php';
class Calificacion {
    private $conn;
    public $estudiante_id, $curso_id, $grado_id, $bimestre, $nota, $anio_escolar;
    public function __construct() { $this->conn = (new Database())->getConnection(); }
    
    public function registrar() {
        
        $sql = "INSERT INTO calificaciones (estudiante_id, curso_id, grado_id, bimestre, nota, anio_escolar) 
                VALUES (:est, :cur, :grado, :bim, :nota, :anio) 
                ON DUPLICATE KEY UPDATE nota = :nota";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':est'=>$this->estudiante_id, ':cur'=>$this->curso_id, ':grado'=>$this->grado_id, ':bim'=>$this->bimestre, ':nota'=>$this->nota, ':anio'=>$this->anio_escolar]);
    }
    
    public function listar() {
        return $this->conn->query("SELECT c.*, CONCAT(e.apellidos, ', ', e.nombres) AS estudiante, cu.nombre AS curso, CONCAT(g.nombre, ' \"', g.seccion, '\"') AS seccion FROM calificaciones c JOIN estudiantes e ON c.estudiante_id = e.id JOIN cursos cu ON c.curso_id = cu.id JOIN grados g ON c.grado_id = g.id ORDER BY c.anio_escolar DESC, c.bimestre")->fetchAll(PDO::FETCH_ASSOC);
    }

    // Para cargar los alumnos y sus notas de una vez
    public function listarAlumnosConNotas($grado_id, $curso_id, $bimestre, $anio) {
        $sql = "SELECT e.id AS estudiante_id, CONCAT(e.apellidos, ', ', e.nombres) AS estudiante, c.nota
                FROM estudiantes e
                LEFT JOIN calificaciones c ON e.id = c.estudiante_id AND c.curso_id = :cur AND c.bimestre = :bim AND c.anio_escolar = :anio
                WHERE e.grado_id = :grado AND e.estado = 'activo'
                ORDER BY e.apellidos";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':cur'=>$curso_id, ':bim'=>$bimestre, ':anio'=>$anio, ':grado'=>$grado_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cursos() { return $this->conn->query("SELECT * FROM cursos ORDER BY nombre")->fetchAll(PDO::FETCH_ASSOC); }
    public function grados() { return $this->conn->query("SELECT id, CONCAT(nombre, ' \"', seccion, '\"') AS etiqueta FROM grados ORDER BY CAST(nombre AS UNSIGNED), seccion")->fetchAll(PDO::FETCH_ASSOC); }

}
?>