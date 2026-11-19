<?php
require_once __DIR__ . '/../config/database.php';
class Docente {
    private $conn;
    public $dni, $nombres, $apellidos, $especialidad, $telefono, $email;
    public function __construct() { $this->conn = (new Database())->getConnection(); }
    public function crear() {
        $sql = "INSERT INTO docentes (dni, nombres, apellidos, especialidad, telefono, email) VALUES (:dni, :nom, :ape, :esp, :tel, :email)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':dni'=>$this->dni, ':nom'=>$this->nombres, ':ape'=>$this->apellidos, ':esp'=>$this->especialidad, ':tel'=>$this->telefono, ':email'=>$this->email]);
    }
    public function listar() { return $this->conn->query("SELECT * FROM docentes ORDER BY apellidos")->fetchAll(PDO::FETCH_ASSOC); }
    public function contar() { return $this->conn->query("SELECT COUNT(*) FROM docentes WHERE estado='activo'")->fetchColumn(); }
}
?>