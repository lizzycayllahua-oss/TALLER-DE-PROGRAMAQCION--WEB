<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$base = (strpos($_SERVER['PHP_SELF'], '/modules/') !== false) ? '../../' : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IE El Cruce ERP</title>
    <link rel="stylesheet" href="<?= $base ?>adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= $base ?>adminlte/dist/css/adminlte.min.css">
    <style>
        /* Estilos personalizados para resaltar */
        .brand-text {
            font-weight: 800 !important;
            color: #f39c12 !important; /* Color dorado/naranja llamativo */
            letter-spacing: 1px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        .navbar-brand-custom {
            font-weight: bold;
            font-size: 1.2rem;
            color: #343a40 !important;
        }
        .badge-AD { background-color: #28a745; color: white; font-size: 14px; padding: 5px 10px; } /* Verde */
        .badge-A  { background-color: #007bff; color: white; font-size: 14px; padding: 5px 10px; } /* Azul */
        .badge-B  { background-color: #ffc107; color: black; font-size: 14px; padding: 5px 10px; } /* Amarillo */
        .badge-C  { background-color: #dc3545; color: white; font-size: 14px; padding: 5px 10px; } /* Rojo */
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <span class="nav-link navbar-brand-custom">
                    <i class="fas fa-school text-primary"></i> Sistema de Gestión Escolar
                </span>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <span class="nav-link font-weight-bold text-success">
                    <i class="fas fa-user-circle"></i> <?= htmlspecialchars($_SESSION['usuario_nombre'] ?? 'Invitado') ?>
                </span>
            </li>
            <li class="nav-item">
                <a href="<?= $base ?>logout.php" class="nav-link text-danger font-weight-bold">
                    <i class="fas fa-sign-out-alt"></i> Salir
                </a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #2c3e50;">
        <a href="<?= $base ?>dashboard.php" class="brand-link text-center" style="border-bottom: 1px solid #4b545c;">
            <i class="fas fa-graduation-cap brand-image ml-2 mt-2" style="color: #f39c12; float: none;"></i>
            <span class="brand-text font-weight-light" style="font-size: 1.2rem; display: block; margin-top: 5px;">IE EL CRUCE</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item"><a href="<?= $base ?>dashboard.php" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p></a></li>
                    <li class="nav-item"><a href="<?= $base ?>modules/estudiantes/index.php" class="nav-link"><i class="nav-icon fas fa-user-graduate"></i><p>Estudiantes</p></a></li>
                    <li class="nav-item"><a href="<?= $base ?>modules/matriculas/index.php" class="nav-link"><i class="nav-icon fas fa-clipboard-check"></i><p>Matrículas</p></a></li>
                    <li class="nav-item"><a href="<?= $base ?>modules/cursos/index.php" class="nav-link"><i class="nav-icon fas fa-book"></i><p>Cursos</p></a></li>
                    <li class="nav-item"><a href="<?= $base ?>modules/docentes/index.php" class="nav-link"><i class="nav-icon fas fa-chalkboard-teacher"></i><p>Docentes</p></a></li>
                    <li class="nav-item"><a href="<?= $base ?>modules/asistencia/index.php" class="nav-link"><i class="nav-icon fas fa-check-square"></i><p>Asistencia</p></a></li>
                    <li class="nav-item"><a href="<?= $base ?>modules/calificaciones/index.php" class="nav-link"><i class="nav-icon fas fa-star"></i><p>Calificaciones</p></a></li>
                    
                </ul>
            </nav>
        </div>
    </aside>