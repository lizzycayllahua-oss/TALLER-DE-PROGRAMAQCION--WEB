<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Estudiante.php';
$est = new Estudiante();
$estudiantes = $est->listar();
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Gestión de Estudiantes</h1></section>
    <section class="content">
        <div class="card">
            <div class="card-header">
    <a href="crear.php" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Estudiante</a>
    <a href="exportar.php" class="btn btn-success float-right"><i class="fas fa-file-excel"></i> Exportar a Excel</a>
         </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    
                    <thead class="thead-dark"><tr><th>#</th><th>DNI</th><th>Apellidos y Nombres</th><th>Grado</th><th>Sexo</th><th>Apoderado</th><th>Estado</th></tr></thead>
                    <tbody>
                    <?php if (empty($estudiantes)): ?>
                        <tr><td colspan="7" class="text-center">No hay estudiantes registrados.</td></tr>
                    <?php else: $i=1; foreach ($estudiantes as $e): ?>
                        <tr>
                            <td><?= $i++ ?></td><td><?= htmlspecialchars($e['dni']) ?></td>
                            <td><?= htmlspecialchars($e['apellidos'] . ', ' . $e['nombres']) ?></td>
                            <td><?= htmlspecialchars($e['grado']) ?></td><td><?= $e['sexo'] ?></td>
                            <td><?= htmlspecialchars($e['apoderado']) ?></td>
                            <td><span class="badge badge-success"><?= $e['estado'] ?></span></td>
                        </tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>