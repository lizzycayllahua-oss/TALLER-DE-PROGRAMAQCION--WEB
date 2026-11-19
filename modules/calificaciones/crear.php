<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Calificacion.php';
$cal = new Calificacion();
$cursos = $cal->cursos(); $grados = $cal->grados();
$mensaje = "";

// Guardar notas masivas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['notas'])) {
    foreach ($_POST['notas'] as $estudiante_id => $nota) {
        if (!empty($nota)) {
            $cal->estudiante_id = $estudiante_id;
            $cal->curso_id = $_POST['curso_id'];
            $cal->grado_id = $_POST['grado_id'];
            $cal->bimestre = $_POST['bimestre'];
            $cal->nota = $nota;
            $cal->anio_escolar = $_POST['anio_escolar'];
            $cal->registrar();
        }
    }
    $mensaje = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>✅ Notas guardadas correctamente.</div>';
}

// Cargar alumnos si se envió el filtro por GET
$alumnos = [];
$filtros = ['grado' => '', 'curso' => '', 'bimestre' => '', 'anio' => date('Y')];
if (isset($_GET['grado_id']) && isset($_GET['curso_id'])) {
    $filtros = [
        'grado' => $_GET['grado_id'], 'curso' => $_GET['curso_id'], 
        'bimestre' => $_GET['bimestre'], 'anio' => $_GET['anio_escolar']
    ];
    $alumnos = $cal->listarAlumnosConNotas($filtros['grado'], $filtros['curso'], $filtros['bimestre'], $filtros['anio']);
}

include '../../includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="font-weight-bold"><i class="fas fa-edit text-success"></i> Registrar Calificaciones</h1>
    </section>
    <section class="content">
        <?= $mensaje ?>
        <!-- Filtros para cargar la lista de alumnos -->
        <div class="card card-outline card-info shadow">
            <div class="card-header"><h3 class="card-title font-weight-bold">1. Selecciona la clase</h3></div>
            <form method="GET" class="card-body">
                <div class="row align-items-end">
                    <div class="col-md-3 form-group">
                        <label>Grado y Sección *</label>
                        <select name="grado_id" class="form-control" required>
                            <option value="">-- Seleccione --</option>
                            <?php foreach ($grados as $g): ?><option value="<?= $g['id'] ?>" <?= $filtros['grado']==$g['id']?'selected':'' ?>><?= $g['etiqueta'] ?></option><?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Curso *</label>
                        <select name="curso_id" class="form-control" required>
                            <option value="">-- Seleccione --</option>
                            <?php foreach ($cursos as $c): ?><option value="<?= $c['id'] ?>" <?= $filtros['curso']==$c['id']?'selected':'' ?>><?= $c['nombre'] ?></option><?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Bimestre *</label>
                        <select name="bimestre" class="form-control" required>
                            <option value="I" <?= $filtros['bimestre']=='I'?'selected':'' ?>>I</option>
                            <option value="II" <?= $filtros['bimestre']=='II'?'selected':'' ?>>II</option>
                            <option value="III" <?= $filtros['bimestre']=='III'?'selected':'' ?>>III</option>
                            <option value="IV" <?= $filtros['bimestre']=='IV'?'selected':'' ?>>IV</option>
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Año Escolar *</label>
                        <input type="number" name="anio_escolar" class="form-control" value="<?= $filtros['anio'] ?>" required>
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="submit" class="btn btn-info btn-block font-weight-bold"><i class="fas fa-search"></i> Cargar Alumnos</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabla para calificar -->
        <?php if (!empty($alumnos)): ?>
        <div class="card card-outline card-success shadow">
            <div class="card-header"><h3 class="card-title font-weight-bold">2. Asigna las notas</h3></div>
            <form method="POST" class="card-body">
                <!-- Ocultamos los datos del filtro para guardarlos -->
                <input type="hidden" name="grado_id" value="<?= $filtros['grado'] ?>">
                <input type="hidden" name="curso_id" value="<?= $filtros['curso'] ?>">
                <input type="hidden" name="bimestre" value="<?= $filtros['bimestre'] ?>">
                <input type="hidden" name="anio_escolar" value="<?= $filtros['anio'] ?>">

                <table class="table table-striped table-bordered">
                    <thead class="thead-light">
                        <tr><th>Estudiante</th><th>Calificativo</th></tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $a): ?>
                        <tr>
                            <td class="align-middle font-weight-bold"><?= htmlspecialchars($a['estudiante']) ?></td>
                            <td>
                                <select name="notas[<?= $a['estudiante_id'] ?>]" class="form-control" style="width: 150px;">
                                    <option value="">-- Seleccione --</option>
                                    <option value="AD" <?= $a['nota']=='AD'?'selected':'' ?>>AD (Logro Destacado)</option>
                                    <option value="A" <?= $a['nota']=='A'?'selected':'' ?>>A (Logro Esperado)</option>
                                    <option value="B" <?= $a['nota']=='B'?'selected':'' ?>>B (En Proceso)</option>
                                    <option value="C" <?= $a['nota']=='C'?'selected':'' ?>>C (En Inicio)</option>
                                </select>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success btn-lg font-weight-bold float-right"><i class="fas fa-save"></i> Guardar Notas</button>
                <div class="clearfix"></div>
            </form>
        </div>
        <?php elseif (isset($_GET['grado_id'])): ?>
            <div class="alert alert-warning">No hay estudiantes registrados en este grado/sección.</div>
        <?php endif; ?>
    </section>
</div>
<?php include '../../includes/footer.php'; ?>