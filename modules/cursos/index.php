<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Curso.php';
$cur = new Curso(); $cursos = $cur->listar();
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Listado de Cursos</h1></section>
    <section class="content">
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark"><tr><th>#</th><th>Curso</th><th>Área</th><th>Horas Semanales</th></tr></thead>
                    <tbody>
                    <?php $i=1; foreach ($cursos as $c): ?>
                        <tr><td><?= $i++ ?></td><td><?= htmlspecialchars($c['nombre']) ?></td><td><?= htmlspecialchars($c['area']) ?></td><td><?= $c['horas_semanales'] ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>