<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Docente.php';
$doc = new Docente();
$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doc->dni = $_POST['dni']; $doc->nombres = $_POST['nombres']; $doc->apellidos = $_POST['apellidos'];
    $doc->especialidad = $_POST['especialidad']; $doc->telefono = $_POST['telefono']; $doc->email = $_POST['email'];
    if ($doc->crear()) { $mensaje = '<div class="alert alert-success">✅ Docente registrado. <a href="index.php">Ver listado</a></div>'; }
    else { $mensaje = '<div class="alert alert-danger">❌ Error. DNI duplicado.</div>'; }
}
include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Registrar Docente</h1></section>
    <section class="content">
        <div class="card card-primary">
            <div class="card-header"><h3 class="card-title">Datos del Docente</h3></div>
            <form method="POST">
                <div class="card-body">
                    <?= $mensaje ?>
                    <div class="row">
                        <div class="col-md-4 form-group"><label>DNI *</label><input type="text" name="dni" class="form-control" maxlength="8" required></div>
                        <div class="col-md-4 form-group"><label>Nombres *</label><input type="text" name="nombres" class="form-control" required></div>
                        <div class="col-md-4 form-group"><label>Apellidos *</label><input type="text" name="apellidos" class="form-control" required></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group"><label>Especialidad</label><input type="text" name="especialidad" class="form-control"></div>
                        <div class="col-md-4 form-group"><label>Teléfono</label><input type="text" name="telefono" class="form-control"></div>
                        <div class="col-md-4 form-group"><label>Email</label><input type="email" name="email" class="form-control"></div>
                    </div>
                </div>
                <div class="card-footer"><button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button><a href="index.php" class="btn btn-default">Cancelar</a></div>
            </form>
        </div>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>