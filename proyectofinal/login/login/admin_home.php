<?php
include 'validate_access.php';

if ($_SESSION['role'] !== 'admin') {
    echo "Acceso restringido. Solo para administradores.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido Administrador, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Este es tu panel de administración.</p>

        <!-- Botones de navegación -->
        <a href="../../public/home2.php" class="btn btn-primary">Home</a>
        <a href="../../form33/solicitudes.php" class="btn btn-primary">Solicitudes</a>

        <!-- Formulario de creación de usuario -->
        <div id="createForm" class="collapse">
            <form action="admin_register.php" method="post">
                <div class="form-group">
                    <input type="email" name="username" class="form-control" required placeholder="Nombre de usuario"/>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" required placeholder="Contraseña" />
                </div>
                <div class="form-group">
                    <select name="role" class="form-control" required>
                        <option value="user">Usuario</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
            </form>
        </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
