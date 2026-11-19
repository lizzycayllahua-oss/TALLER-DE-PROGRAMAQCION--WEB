<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Calificacion.php';
$cal = new Calificacion(); $registros = $cal->listar();
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="font-weight-bold"><i class="fas fa-star text-warning"></i> Registro de Calificaciones</h1>
    </section>
    <section class="content">
        <div class="card card-outline card-primary shadow">
            <div class="card-header">
                <a href="crear.php" class="btn btn-primary font-weight-bold"><i class="fas fa-plus"></i> Registrar Notas (Masivo)</a>
                   <a href="exportar.php" class="btn btn-success font-weight-bold float-right"><i class="fas fa-file-excel"></i> Exportar a Excel</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr><th>#</th><th>Estudiante</th><th>Curso</th><th>Sección</th><th>Bimestre</th><th>Calificativo</th><th>Año</th></tr>
                    </thead>
                    <tbody>
                    <?php if (empty($registros)): ?>
                        <tr><td colspan="7" class="text-center">No hay calificaciones registradas.</td></tr>
                    <?php else: $i=1; foreach ($registros as $r): 
                        $clase_badge = 'badge-' . $r['nota']; // Genera badge-AD, badge-A, etc.
                    ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= htmlspecialchars($r['estudiante']) ?></td>
                            <td><?= htmlspecialchars($r['curso']) ?></td>
                            <td><?= htmlspecialchars($r['seccion']) ?></td>
                            <td><span class="badge badge-secondary"><?= $r['bimestre'] ?></span></td>
                            <td><span class="badge <?= $clase_badge ?>"><?= $r['nota'] ?></span></td>
                            <td><?= $r['anio_escolar'] ?></td>
                        </tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>