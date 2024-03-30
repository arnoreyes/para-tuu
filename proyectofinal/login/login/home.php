<?php
include 'validate_access.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Este es tu espacio personal en el sitio web. ¡Disfruta!</p>
    <!-- Puedes agregar más contenido según lo necesites -->
</body>
</html>
