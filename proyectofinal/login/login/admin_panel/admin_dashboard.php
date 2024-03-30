<?php
session_start();
include '../database_connection.php';

// Verificar si el usuario es administrador
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}

// Obtener todos los usuarios de la base de datos incluyendo nombre y apellido
$stmt = $conn->prepare("SELECT id, username, first_name, last_name, role FROM users");
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Administración</title>
  <link rel="stylesheet" href="admin_dashboard.css">
</head>
<body>
<div class="container">
    <h1>Panel de Administración</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario (Email)</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['first_name']; ?></td>
                <td><?php echo $user['last_name']; ?></td>
                <td><?php echo $user['role']; ?></td>
                <td>
                    <a href="update_user.php?id=<?php echo $user['id']; ?>">Actualizar</a>
                    <a href="delete_user.php?id=<?php echo $user['id']; ?>" 
                       onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?');">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script src="admin_dashboard.js"></script>
</body>
</html>
