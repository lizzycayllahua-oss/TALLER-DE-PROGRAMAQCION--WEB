<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: login.php'); exit; }
require_once 'models/Estudiante.php';
$est = new Estudiante();
$conn = (new Database())->getConnection();

$totalEstudiantes = $est->contar();
$totalMatriculas  = $conn->query("SELECT COUNT(*) FROM matriculas WHERE estado='activa'")->fetchColumn();
$totalCursos      = $conn->query("SELECT COUNT(*) FROM cursos")->fetchColumn();
$totalDocentes    = $conn->query("SELECT COUNT(*) FROM docentes WHERE estado='activo'")->fetchColumn();

include 'includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Panel Principal <small>IE El Cruce</small></h1></section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner"><h3><?= $totalEstudiantes ?></h3><p>Estudiantes Activos</p></div>
                    <div class="icon"><i class="fas fa-user-graduate"></i></div>
                    <a href="modules/estudiantes/index.php" class="small-box-footer">Ver todos <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner"><h3><?= $totalMatriculas ?></h3><p>Matrículas Activas</p></div>
                    <div class="icon"><i class="fas fa-clipboard-check"></i></div>
                    <a href="modules/matriculas/index.php" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner"><h3><?= $totalCursos ?></h3><p>Cursos Registrados</p></div>
                    <div class="icon"><i class="fas fa-book"></i></div>
                    <a href="modules/cursos/index.php" class="small-box-footer">Ver cursos <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner"><h3><?= $totalDocentes ?></h3><p>Docentes Activos</p></div>
                    <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <a href="modules/docentes/index.php" class="small-box-footer">Ver docentes <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php'; ?>