<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: login.php'); exit; }
require_once 'models/Estudiante.php';
$est = new Estudiante();
$conn = (new Database())->getConnection();

$totalEstudiantes = $est->contar();
$totalMatriculas  = $conn->query("SELECT COUNT(*) FROM matriculas WHERE estado='activa'")->fetchColumn();
$totalCursos      = $conn->query("SELECT COUNT(*) FROM cursos")->fetchColumn();
$totalDocentes    = $conn->query("SELECT COUNT(*) FROM docentes WHERE estado='activo'")->fetchColumn();

include 'includes/header.php';
?>
<div class="content-wrapper">
    <section class="content-header"><h1>Panel Principal <small>IE El Cruce</small></h1></section>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner"><h3><?= $totalEstudiantes ?></h3><p>Estudiantes Activos</p></div>
                        <div class="icon"><i class="fas fa-user-graduate"></i></div>
                        <a href="modules/estudiantes/index.php" class="small-box-footer">Ver todos <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner"><h3><?= $totalMatriculas ?></h3><p>Matrículas Activas</p></div>
                        <div class="icon"><i class="fas fa-clipboard-check"></i></div>
                        <a href="modules/matriculas/index.php" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner"><h3><?= $totalCursos ?></h3><p>Cursos Registrados</p></div>
                        <div class="icon"><i class="fas fa-book"></i></div>
                        <a href="modules/cursos/index.php" class="small-box-footer">Ver cursos <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner"><h3><?= $totalDocentes ?></h3><p>Docentes Activos</p></div>
                        <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
                        <a href="modules/docentes/index.php" class="small-box-footer">Ver docentes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div> 

            <div class="row mt-4">
               
                            <!-- NUEVA SECCIÓN: ACTIVIDADES Y AVISOS (Todo el año) -->
            <div class="row mt-4">
                <!-- Panel de Calendario Escolar Anual -->
                <div class="col-md-8">
                    <div class="card card-outline card-primary shadow">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-calendar-alt text-primary"></i> Calendario de Actividades Escolares 2026</h3>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-hover m-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="20%">Fecha</th>
                                        <th>Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge badge-info">Marzo</span></td>
                                        <td><b>Inicio del Año Escolar</b> - Bienvenida a los estudiantes y presentación de docentes.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Abril</span></td>
                                        <td><b>Semana Santa</b> - Reflexión y actividades religiosas. <br><b>Día de la Tierra:</b> Campaña de reciclaje.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Mayo</span></td>
                                        <td><b>Día del Trabajo</b> - Charla vocacional. <br><b>Día de la Madre:</b> Festival artístico y homenaje.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Junio</span></td>
                                        <td><b>Día de la Bandera y Batalla de Arica</b> (07). <br><b>Día del Padre</b> - Homenaje y actuación central.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Julio</span></td>
                                        <td><b>Día del Maestro</b> (06) - Homenaje del alumnado. <br><b>Fiestas Patrias</b> - Desfile cívico y entrega de libretas II Bimestre.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Agosto</span></td>
                                        <td><b>Proceso de Matrícula 2027</b> - Para nuevos ingresantes. <br><b>Semana de la Juventud:</b> Olimpiadas deportivas internas.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Septiembre</span></td>
                                        <td><b>Día de la Primavera y la Juventud</b> - Pasacalle y actividades recreativas.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Octubre</span></td>
                                        <td><b>Día del Combate de Angamos</b> (08). <br><b>Día de la Canción Criolla:</b> Festival de talentos IE El Cruce.</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Noviembre</span></td>
                                        <td><b>Semana de la Educación Técnica</b> - Feria de emprendimiento (EPT).</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">Diciembre</span></td>
                                        <td><b>Clausura del Año Escolar</b> - Entrega de libretas III Bimestre y Navidad institucional.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Panel de Avisos (Se mantiene igual) -->
                <div class="col-md-4">
                    <div class="card card-outline card-success shadow">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold"><i class="fas fa-bullhorn text-success"></i> Avisos de la Dirección</h3>
                        </div>
                        <div class="card-body">
                            <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Matrícula 2027</h5>
                                <p class="text-sm">El proceso de matrícula para el próximo año escolar inicia el 01 de agosto de 2026. Pasar por Secretaría con los documentos correspondientes.</p>
                            </div>
                            <div class="callout callout-warning">
                                <h5><i class="fas fa-exclamation-triangle"></i> Uniforme Escolar</h5>
                                <p class="text-sm">Se recuerda a los alumnos que el uso del uniforme completo es obligatorio para las ceremonias oficiales y desfiles.</p>
                            </div>
                            <div class="callout callout-success">
                                <h5><i class="fas fa-check-circle"></i> Éxito en Exámenes</h5>
                                <p class="text-sm">La dirección desea muchos éxitos a todos los estudiantes en sus evaluaciones de fin de bimestre.</p>
                            </div>
                        </div>
                    </div>
                </div>
<?php include 'includes/footer.php'; ?>