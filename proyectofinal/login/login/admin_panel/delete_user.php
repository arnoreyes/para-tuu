<?php
session_start();
include '../database_connection.php';


// Verificar si el usuario es administrador
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el usuario de la base de datos
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['message'] = "Usuario eliminado correctamente.";
    } else {
        $_SESSION['error'] = "No se pudo eliminar el usuario.";
    }

    $stmt->close();
    header('Location: admin_dashboard.php');
    exit;
}
