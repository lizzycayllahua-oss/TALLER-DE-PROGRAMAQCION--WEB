<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Asistencia.php';
$asi = new Asistencia();
$mensaje = "";
$cursos = $asi->cursos(); $grados = $asi->grados();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $asi->estudiante_id = $_POST['estudiante_id']; $asi->curso_id = $_POST['curso_id'];
    $asi->grado_id = $_POST['grado_id']; $asi->fecha = $_POST['fecha']; $asi->estado = $_POST['estado'];
    if ($asi->registrar()) { $mensaje = '<div class="alert alert-success">✅ Asistencia registrada. <a href="index.php">Ver listado</a></div>'; }
    else { $mensaje = '<div class="alert alert-danger">❌ Error.</div>'; }
}
$estudiantes = []; if (isset($_GET['grado_id'])) { $estudiantes = $asi->estudiantesPorGrado($_GET['grado_id']); }
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Registrar Asistencia</h1></section>
    <section class="content">
        <div class="card card-primary">
            <div class="card-header"><h3 class="card-title">Datos</h3></div>
            <form method="POST">
                <div class="card-body">
                    <?= $mensaje ?>
                    <div class="row">
                        <div class="col-md-3 form-group"><label>Grado y Sección *</label>
                            <select name="grado_id" class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <?php foreach ($grados as $g): ?><option value="<?= $g['id'] ?>"><?= $g['etiqueta'] ?></option><?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3 form-group"><label>Curso *</label>
                            <select name="curso_id" class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <?php foreach ($cursos as $c): ?><option value="<?= $c['id'] ?>"><?= $c['nombre'] ?></option><?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3 form-group"><label>Estudiante *</label>
                            <select name="estudiante_id" class="form-control" required>
                                <option value="">-- Elija grado primero --</option>
                                <?php foreach ($estudiantes as $e): ?><option value="<?= $e['id'] ?>"><?= $e['nombre'] ?></option><?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3 form-group"><label>Fecha *</label><input type="date" name="fecha" class="form-control" value="<?= date('Y-m-d') ?>" required></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group"><label>Estado *</label>
                            <select name="estado" class="form-control" required>
                                <option value="presente">Presente</option><option value="ausente">Ausente</option><option value="tardanza">Tardanza</option><option value="justificado">Justificado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer"><button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button><a href="index.php" class="btn btn-default">Cancelar</a></div>
            </form>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>