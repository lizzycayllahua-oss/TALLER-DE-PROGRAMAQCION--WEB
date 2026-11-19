<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Matricula.php';
$mat = new Matricula(); $matriculas = $mat->listar();
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Matrículas Registradas</h1></section>
    <section class="content">
        <div class="card">
            <div class="card-header"><a href="crear.php" class="btn btn-success"><i class="fas fa-plus"></i> Nueva Matrícula</a></div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark"><tr><th>#</th><th>Estudiante</th><th>DNI</th><th>Curso</th><th>Sección</th><th>Año</th><th>Fecha</th></tr></thead>
                    <tbody>
                    <?php if (empty($matriculas)): ?>
                        <tr><td colspan="7" class="text-center">No hay matrículas registradas.</td></tr>
                    <?php else: $i=1; foreach ($matriculas as $m): ?>
                        <tr><td><?= $i++ ?></td><td><?= htmlspecialchars($m['estudiante']) ?></td><td><?= htmlspecialchars($m['dni']) ?></td><td><?= htmlspecialchars($m['curso']) ?></td><td><?= htmlspecialchars($m['seccion']) ?></td><td><?= $m['anio_escolar'] ?></td><td><?= $m['fecha_matricula'] ?></td></tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>