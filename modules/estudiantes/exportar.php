<?php
session_start();
if (!isset($_SESSION['usuario_id'])) { header('Location: ../../login.php'); exit; }
require_once '../../models/Estudiante.php';

$est = new Estudiante();
$estudiantes = $est->listar();


header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=Estudiantes_IE_El_Cruce.xls");
header("Pragma: no-cache");
header("Expires: 0");


echo "<table border='1'>";
echo "<tr>
        <th style='background-color:#007bff; color:white;'>N°</th>
        <th style='background-color:#007bff; color:white;'>DNI</th>
        <th style='background-color:#007bff; color:white;'>Apellidos y Nombres</th>
        <th style='background-color:#007bff; color:white;'>Grado y Sección</th>
        <th style='background-color:#007bff; color:white;'>Sexo</th>
        <th style='background-color:#007bff; color:white;'>Apoderado</th>
        <th style='background-color:#007bff; color:white;'>Estado</th>
      </tr>";

$i = 1;
foreach ($estudiantes as $e) {
    echo "<tr>";
    echo "<td>" . $i++ . "</td>";
    echo "<td>" . $e['dni'] . "</td>";
    echo "<td>" . utf8_decode($e['apellidos'] . ', ' . $e['nombres']) . "</td>";
    echo "<td>" . utf8_decode($e['grado']) . "</td>";
    echo "<td>" . $e['sexo'] . "</td>";
    echo "<td>" . utf8_decode($e['apoderado']) . "</td>";
    echo "<td>" . $e['estado'] . "</td>";
    echo "</tr>";
}
echo "</table>";
exit;
?>