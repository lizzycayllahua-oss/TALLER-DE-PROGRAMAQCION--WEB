<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Estudiante.php';
$est = new Estudiante();
$mensaje = "";
$grados = $est->grados();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $est->dni = $_POST['dni']; $est->nombres = $_POST['nombres']; $est->apellidos = $_POST['apellidos'];
    $est->fecha_nacimiento = $_POST['fecha_nacimiento']; $est->sexo = $_POST['sexo'];
    $est->telefono = $_POST['telefono']; $est->apoderado = $_POST['apoderado']; $est->grado_id = $_POST['grado_id'];
    if ($est->crear()) { $mensaje = '<div class="alert alert-success">✅ Estudiante registrado. <a href="index.php">Ver listado</a></div>'; }
    else { $mensaje = '<div class="alert alert-danger">❌ Error. DNI duplicado.</div>'; }
}
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Registrar Nuevo Estudiante</h1></section>
    <section class="content">
        <div class="card card-primary">
            <div class="card-header"><h3 class="card-title">Datos del Estudiante</h3></div>
            <form method="POST">
                <div class="card-body">
                    <?= $mensaje ?>
                    <div class="row">
                        <div class="col-md-4 form-group"><label>DNI *</label><input type="text" name="dni" class="form-control" maxlength="8" required></div>
                        <div class="col-md-4 form-group"><label>Nombres *</label><input type="text" name="nombres" class="form-control" required></div>
                        <div class="col-md-4 form-group"><label>Apellidos *</label><input type="text" name="apellidos" class="form-control" required></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group"><label>Fecha Nac.</label><input type="date" name="fecha_nacimiento" class="form-control"></div>
                        <div class="col-md-4 form-group"><label>Sexo</label><select name="sexo" class="form-control"><option value="M">Masculino</option><option value="F">Femenino</option></select></div>
                        <div class="col-md-4 form-group"><label>Teléfono</label><input type="text" name="telefono" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group"><label>Apoderado</label><input type="text" name="apoderado" class="form-control"></div>
                        <div class="col-md-6 form-group"><label>Grado y Sección *</label>
                            <select name="grado_id" class="form-control" required>
                                <option value="">-- Seleccione --</option>
                                <?php foreach ($grados as $g): ?><option value="<?= $g['id'] ?>"><?= $g['etiqueta'] ?></option><?php endforeach; ?>
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