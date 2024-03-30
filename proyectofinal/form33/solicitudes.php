<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Solicitudes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Historial de Solicitudes de Limpieza</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Número de Habitaciones</th>
                    <th>Número de Baños</th>
                    <th>Mascotas</th>
                    <th>Frecuencia</th>
                    <th>Comentarios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaSolicitudes">
                <!-- Las filas se agregarán dinámicamente desde scripts.js -->
            </tbody>
        </table>
        <!-- Botón para volver a admin_home.php -->
<div class="text-center mb-3">
    <button onclick="window.location.href='../login/login/admin_home.php';" class="btn btn-primary">Volver al Panel de Administración</button>
</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
