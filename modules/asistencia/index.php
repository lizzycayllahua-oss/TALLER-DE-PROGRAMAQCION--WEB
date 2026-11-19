<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Asistencia.php';
$asi = new Asistencia();
$fecha = $_GET['fecha'] ?? date('Y-m-d');
$registros = $asi->listar($fecha);
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Asistencia</h1></section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="crear.php" class="btn btn-primary"><i class="fas fa-plus"></i> Registrar Asistencia</a>
                <form method="GET" class="float-right" style="display:flex;gap:5px">
                    <input type="date" name="fecha" class="form-control" value="<?= $fecha ?>">
                    <button class="btn btn-secondary"><i class="fas fa-filter"></i> Filtrar</button>
                </form>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark"><tr><th>#</th><th>Fecha</th><th>Estudiante</th><th>Curso</th><th>Sección</th><th>Estado</th></tr></thead>
                    <tbody>
                    <?php if (empty($registros)): ?>
                        <tr><td colspan="6" class="text-center">No hay asistencias registradas.</td></tr>
                    <?php else: $i=1; foreach ($registros as $r): $colores = ['presente'=>'success','ausente'=>'danger','tardanza'=>'warning','justificado'=>'info']; ?>
                        <tr><td><?= $i++ ?></td><td><?= $r['fecha'] ?></td><td><?= htmlspecialchars($r['estudiante']) ?></td><td><?= htmlspecialchars($r['curso']) ?></td><td><?= htmlspecialchars($r['seccion']) ?></td><td><span class="badge badge-<?= $colores[$r['estado']] ?>"><?= $r['estado'] ?></span></td></tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>