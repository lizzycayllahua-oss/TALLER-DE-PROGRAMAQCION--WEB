<?php
session_start();
require_once 'config/database.php';
if (isset($_SESSION['usuario_id'])) { header('Location: dashboard.php'); exit; }
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';
    $conn = (new Database())->getConnection();
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :e AND activo = 1");
    $stmt->execute([':e' => $email]);
    $u = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($u && password_verify($pass, $u['password_hash'])) {
        $_SESSION['usuario_id'] = $u['id'];
        $_SESSION['usuario_nombre'] = $u['nombre'];
        $_SESSION['usuario_rol'] = $u['rol'];
        header('Location: dashboard.php');
        exit;
    } else { $error = "Credenciales incorrectas."; }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"><title>Login | IE El Cruce ERP</title>
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo"><a href="#"><b>IE El Cruce</b> ERP</a></div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Inicie sesión</p>
            <?php if ($error): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>
            <form method="POST">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Correo" required>
                    <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                    <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>