<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Calificacion.php';

$cal = new Calificacion();
$registros = $cal->listar();

header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=Calificaciones_IE_El_Cruce.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border='1'>";
echo "<tr>
        <th style='background-color:#28a745; color:white;'>N°</th>
        <th style='background-color:#28a745; color:white;'>Estudiante</th>
        <th style='background-color:#28a745; color:white;'>Curso</th>
        <th style='background-color:#28a745; color:white;'>Sección</th>
        <th style='background-color:#28a745; color:white;'>Bimestre</th>
        <th style='background-color:#28a745; color:white;'>Calificativo</th>
        <th style='background-color:#28a745; color:white;'>Año</th>
      </tr>";

$i = 1;
foreach ($registros as $r) {
    echo "<tr>";
    echo "<td>" . $i++ . "</td>";
    echo "<td>" . utf8_decode($r['estudiante']) . "</td>";
    echo "<td>" . utf8_decode($r['curso']) . "</td>";
    echo "<td>" . utf8_decode($r['seccion']) . "</td>";
    echo "<td>" . $r['bimestre'] . "</td>";
    echo "<td>" . $r['nota'] . "</td>";
    echo "<td>" . $r['anio_escolar'] . "</td>";
    echo "</tr>";
}
echo "</table>";
exit;
?>