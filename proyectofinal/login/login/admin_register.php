<?php
// admin_register.php

include 'database_connection.php';
include 'validate_access.php';

// Restringimos el acceso solo a administradores
if ($_SESSION['role'] !== 'admin') {
    header("Location: no_access.php");
    exit;
}

$message = ''; // Inicializamos la variable de mensaje

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Validamos si el correo ya está registrado
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "El correo ya está registrado.";
    } else {
        // El correo no está registrado, procedemos a insertar el nuevo usuario
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $hashed_password, $role);
        
        if ($stmt->execute()) {
            $message = "Nuevo usuario creado con éxito.";
        } else {
            $message = "Error al crear el usuario.";
        }
    }

    $stmt->close();
    $conn->close(); // Es importante cerrar la conexión una vez terminado.
}

// Redirigir o mostrar el mensaje en admin_home.php
header('Location: admin_home.php?message=' . urlencode($message));
exit;
