<?php
include 'database_connection.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Comprobar si el correo electrónico está registrado y autenticar al usuario
    $sql = "SELECT id, password, role FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        // Establecer las variables de sesión
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];

        // Redirigir al usuario a una página basada en su rol
        if ($user['role'] === 'admin') {
            header('Location: admin_home.php');
        } else {
            header('Location: home.php');
        }
        exit;
    } else {
        // Credenciales incorrectas o el usuario no existe
        $_SESSION['error'] = "Credenciales incorrectas o el usuario no existe.";
        header('Location: index.php');
        exit;
    }
}
?>
