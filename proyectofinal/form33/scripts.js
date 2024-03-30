function guardarDatos() {
    localStorage.setItem('telefono', document.getElementById('telefono').value);
    localStorage.setItem('habitaciones', document.getElementById('habitaciones').value);
    localStorage.setItem('baños', document.getElementById('baños').value);
    localStorage.setItem('mascotas', document.getElementById('mascotas').value);
    localStorage.setItem('frecuencia', document.getElementById('frecuencia').value);
    localStorage.setItem('comentarios', document.getElementById('comentarios').value);

    alert('Datos guardados correctamente');
}

function enviarSolicitud() {
    let telefono = document.getElementById('telefono').value;
    let habitaciones = document.getElementById('habitaciones').value;
    let baños = document.getElementById('baños').value;
    let mascotas = document.getElementById('mascotas').value;
    let frecuencia = document.getElementById('frecuencia').value;
    let comentarios = document.getElementById('comentarios').value;

    // Verifica que ninguno de los campos esté vacío
    if (!telefono || !habitaciones || !baños || !mascotas || !frecuencia || !comentarios) {
        Swal.fire({
            title: 'Error',
            text: 'Todos los campos son obligatorios.',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
        return; // Detiene la ejecución si algún campo está vacío
    }

    let solicitudes = JSON.parse(localStorage.getItem('solicitudes')) || [];
    
    solicitudes.unshift({
        telefono: telefono,
        fecha: new Date().toLocaleString(),
        habitaciones: habitaciones,
        baños: baños,
        mascotas: mascotas,
        frecuencia: frecuencia,
        comentarios: comentarios
    });
    
    localStorage.setItem('solicitudes', JSON.stringify(solicitudes));

    Swal.fire({
        title: '¡Solicitud Enviada!',
        text: 'Hemos recibido tu solicitud de servicio de limpieza.',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../public/home2.php";
        }
    });
}

document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById('tablaSolicitudes')) {
        cargarSolicitudes();
    }
});

function cargarSolicitudes() {
    let solicitudes = JSON.parse(localStorage.getItem('solicitudes')) || [];
    let tabla = document.getElementById('tablaSolicitudes');

    tabla.innerHTML = ''; // Limpia la tabla antes de cargar las solicitudes

    solicitudes.forEach((solicitud, index) => {
        let fila = tabla.insertRow();

        fila.insertCell(0).textContent = solicitud.fecha;
        fila.insertCell(1).textContent = solicitud.habitaciones;
        fila.insertCell(2).textContent = solicitud.baños;
        fila.insertCell(3).textContent = solicitud.mascotas;
        fila.insertCell(4).textContent = solicitud.frecuencia;
        fila.insertCell(5).textContent = solicitud.comentarios;
        let celdaAcciones = fila.insertCell(6);

        let botonAprobar = document.createElement('button');
        botonAprobar.textContent = 'Aprobar';
        botonAprobar.className = 'btn btn-primary btn-sm mx-1';
        botonAprobar.addEventListener('click', function() {
            aprobarSolicitud(index);
        });
        celdaAcciones.appendChild(botonAprobar);

        let botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.className = 'btn btn-danger btn-sm mx-1';
        botonEliminar.addEventListener('click', function() {
            eliminarSolicitud(index);
        });
        celdaAcciones.appendChild(botonEliminar);
    });
}

function aprobarSolicitud(index) {
    let solicitudes = JSON.parse(localStorage.getItem('solicitudes')) || [];
    let solicitud = solicitudes[index];

    let mensaje = `Hola te saluda el equipo de VP cleaner, gracias por escribirnos. Leímos tu solicitud de limpieza y queremos organizar mejor nuestra visita con detalles sobre fecha, hora y algún otro detalle que quieras mencionar. ¡Esperamos tu mensaje! Feliz día.`;
    window.open(`https://wa.me/${solicitud.telefono}?text=${encodeURIComponent(mensaje)}`, '_blank');
}

function eliminarSolicitud(index) {
    let solicitudes = JSON.parse(localStorage.getItem('solicitudes')) || [];
    solicitudes.splice(index, 1);
    localStorage.setItem('solicitudes', JSON.stringify(solicitudes));
    cargarSolicitudes();
}
