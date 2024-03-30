<?php
session_start();
include '../database_connection.php';

// Resto del código de comprobación de inicio de sesión de administrador...

$userId = $_GET['id'] ?? null;
$user = null;

if ($userId) {
    // Obtener los detalles actuales del usuario
    $stmt = $conn->prepare("SELECT username, first_name, last_name, role FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
    } else {
        $_SESSION['error'] = "Usuario no encontrado.";
        header('Location: admin_dashboard.php');
        exit;
    }
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $user) {
    // Recoger los datos del formulario
    $username = trim($_POST['username']);
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $role = $_POST['role'];

    // Actualizar los detalles del usuario
    $updateStmt = $conn->prepare("UPDATE users SET username = ?, first_name = ?, last_name = ?, role = ? WHERE id = ?");
    $updateStmt->bind_param("ssssi", $username, $firstName, $lastName, $role, $userId);
    try {
        $updateStmt->execute();
        if ($updateStmt->affected_rows > 0) {
            $_SESSION['message'] = "Usuario actualizado correctamente.";
        } else {
            $_SESSION['error'] = "No se realizaron cambios en la información del usuario.";
        }
    } catch (mysqli_sql_exception $e) {
        $_SESSION['error'] = "Error al actualizar el usuario: " . $e->getMessage();
    }
    $updateStmt->close();
    header('Location: admin_dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Usuario</title>
    <link rel="stylesheet" href="update_user_style.css">
</head>
<body>
<div class="container">
    <h1>Actualizar Usuario</h1>
    <form action="update_user.php?id=<?php echo htmlspecialchars($userId); ?>" method="post">
        <div class="form-group">
            <label for="first_name">Nombre:</label>
            <input type="text" name="first_name" id="first_name" value="<?php echo htmlspecialchars($user['first_name'] ?? ''); ?>" required>
        </div>
        <div class="form-group">
            <label for="last_name">Apellido:</label>
            <input type="text" name="last_name" id="last_name" value="<?php echo htmlspecialchars($user['last_name'] ?? ''); ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Correo Electrónico:</label>
            <input type="email" name="username" id="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
            <small>Dejar en blanco para mantener la contraseña actual.</small>
        </div>
        <div class="form-group">
            <label for="role">Rol:</label>
            <select name="role" id="role" required>
                <option value="user" <?php echo $user['role'] == 'user' ? 'selected' : ''; ?>>Usuario</option>
                <option value="admin" <?php echo $user['role'] == 'admin' ? 'selected' : ''; ?>>Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn">Actualizar</button>
    </form>
</div>
<script src="admin_dashboard.js"></script>
</body>
</html>