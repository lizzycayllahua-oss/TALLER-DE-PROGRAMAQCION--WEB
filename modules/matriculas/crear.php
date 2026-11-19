<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Matricula.php';
$mat = new Matricula();
$mensaje = "";
$estudiantes = $mat->estudiantes(); $cursos = $mat->cursos(); $grados = $mat->grados();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mat->estudiante_id = $_POST['estudiante_id']; $mat->curso_id = $_POST['curso_id'];
    $mat->grado_id = $_POST['grado_id']; $mat->anio_escolar = $_POST['anio_escolar'];
    if ($mat->crear()) { $mensaje = '<div class="alert alert-success">✅ Matrícula registrada. <a href="index.php">Ver listado</a></div>'; }
    else { $mensaje = '<div class="alert alert-danger">❌ El estudiante ya está matriculado en ese curso este año.</div>'; }
}
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Registrar Matrícula</h1></section>
    <section class="content">
        <div class="card card-success">
            <div class="card-header"><h3 class="card-title">Datos de la Matrícula</h3></div>
            <form method="POST">
                <div class="card-body">
                    <?= $mensaje ?>
                    <div class="row">
                        <div class="col-md-6 form-group"><label>Estudiante *</label>
                            <select name="estudiante_id" class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <?php foreach ($estudiantes as $e): ?><option value="<?= $e['id'] ?>"><?= $e['dni'] ?> - <?= $e['nombre'] ?></option><?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group"><label>Curso *</label>
                            <select name="curso_id" class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <?php foreach ($cursos as $c): ?><option value="<?= $c['id'] ?>"><?= $c['nombre'] ?></option><?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group"><label>Grado y Sección *</label>
                            <select name="grado_id" class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <?php foreach ($grados as $g): ?><option value="<?= $g['id'] ?>"><?= $g['etiqueta'] ?></option><?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group"><label>Año Escolar *</label><input type="number" name="anio_escolar" class="form-control" value="<?= date('Y') ?>" required></div>
                    </div>
                </div>
                <div class="card-footer"><button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Matricular</button><a href="index.php" class="btn btn-default">Cancelar</a></div>
            </form>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>