<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Servicio de Limpieza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Solicitud de Servicio de Limpieza Personalizado</h2>
        <form id="formularioLimpieza">
            <div class="form-group">
                <label for="telefono">Número Telefónico</label>
                <input type="tel" class="form-control" id="telefono" required>
            </div>
            <div class="form-group">
                <label for="habitaciones">Número de Habitaciones</label>
                <input type="number" class="form-control" id="habitaciones" required min="0">
            </div>
            <div class="form-group">
                <label for="baños">Número de Baños</label>
                <input type="number" class="form-control" id="baños" required min="0">
            </div>
            <div class="form-group">
                <label for="mascotas">¿Tiene mascotas?</label>
                <select class="form-control" id="mascotas">
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="frecuencia">Frecuencia del servicio</label>
                <select class="form-control" id="frecuencia">
                    <option value="una_vez">Una vez</option>
                    <option value="semanal">Semanal</option>
                    <option value="quincenal">Quincenal</option>
                    <option value="mensual">Mensual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comentarios">Comentarios adicionales</label>
                <textarea class="form-control" id="comentarios" rows="3" placeholder="Por favor, indique cualquier información adicional que considere relevante para el servicio de limpieza."></textarea>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-info mr-2" onclick="enviarSolicitud()">Siguiente</button>
            </div>
        </form>
    </div>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
