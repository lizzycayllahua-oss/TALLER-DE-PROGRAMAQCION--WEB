<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Docente.php';
$doc = new Docente(); $docentes = $doc->listar();
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Docentes</h1></section>
    <section class="content">
        <div class="card">
            <div class="card-header"><a href="crear.php" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Docente</a></div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark"><tr><th>#</th><th>DNI</th><th>Apellidos y Nombres</th><th>Especialidad</th><th>Email</th></tr></thead>
                    <tbody>
                    <?php $i=1; foreach ($docentes as $d): ?>
                        <tr><td><?= $i++ ?></td><td><?= htmlspecialchars($d['dni']) ?></td><td><?= htmlspecialchars($d['apellidos'] . ', ' . $d['nombres']) ?></td><td><?= htmlspecialchars($d['especialidad']) ?></td><td><?= htmlspecialchars($d['email']) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>