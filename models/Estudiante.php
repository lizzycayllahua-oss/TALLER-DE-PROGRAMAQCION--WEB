<?php
require_once __DIR__ . '/../config/database.php';
class Estudiante {
    private $conn;
    public $dni, $nombres, $apellidos, $fecha_nacimiento, $sexo, $telefono, $apoderado, $grado_id;
    public function __construct() { $this->conn = (new Database())->getConnection(); }
    public function crear() {
        $sql = "INSERT INTO estudiantes (dni, nombres, apellidos, fecha_nacimiento, sexo, telefono, apoderado, grado_id) VALUES (:dni, :nom, :ape, :fnac, :sexo, :tel, :apo, :grado)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':dni'=>$this->dni, ':nom'=>$this->nombres, ':ape'=>$this->apellidos, ':fnac'=>$this->fecha_nacimiento, ':sexo'=>$this->sexo, ':tel'=>$this->telefono, ':apo'=>$this->apoderado, ':grado'=>$this->grado_id]);
    }
    public function listar() {
        return $this->conn->query("SELECT e.*, CONCAT(g.nombre, ' \"', g.seccion, '\"') AS grado FROM estudiantes e LEFT JOIN grados g ON e.grado_id = g.id ORDER BY e.apellidos")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function grados() {
        return $this->conn->query("SELECT id, CONCAT(nombre, ' \"', seccion, '\"') AS etiqueta FROM grados ORDER BY CAST(nombre AS UNSIGNED), seccion")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function contar() { return $this->conn->query("SELECT COUNT(*) FROM estudiantes WHERE estado='activo'")->fetchColumn(); }
}
?>