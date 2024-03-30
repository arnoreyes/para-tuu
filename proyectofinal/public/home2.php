<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPCleaning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home22.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


    <style>
        /* Estilos personalizados */
        .video-section {
            position: relative;
            height: 50vh; /* Altura del vídeo (puedes ajustar esto según prefieras) */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .background-video {
            width: 100%;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .video-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            font-size: 1.5rem;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

   <!-- Footer fijo en la parte superior -->
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">VPcleaning</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTopFixed" aria-controls="navbarTopFixed" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTopFixed">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <!-- Aquí puedes añadir más elementos si es necesario -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienessomos/quienessomos.php">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
                <!-- Redes sociales en el lado derecho del navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/profile.php?id=61553425275843&mibextid=LQQJ4d" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/@vpcleaning90" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://instagram.com/vp._.cleaning_?igshid=M2RkZGJiMzhjOQ%3D%3D&utm_source=qr_" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


   <!-- Sección de Video con Título -->
   <div class="video-section">
        <video autoplay loop muted class="background-video">
            <source src="vid3.mp4" type="video/mp4">
        </video>
        <div class="video-content">
            <h1>Servicios de Limpieza Profesional</h1>
            <p>Los mejores paquetes de limpieza para tu hogar o negocio</p>
        </div>
    </div>

    <!-- Paquetes -->
   <!-- Paquetes de Limpieza -->
   <div class="container mt-4">
    <h2 class="text-center mb-4">Nuestros Paquetes</h2>
    <div class="row">
       <!-- Paquete Básico -->
<div class="col-lg-3 col-md-6 mb-4">
    <!-- Tarjeta del paquete básico -->
    <div class="card">
        <!-- Cuerpo de la tarjeta -->
        <div class="card-body">
            <!-- Título de la tarjeta -->
            <h5 class="card-title">Básico</h5>
            <!-- Lista de servicios incluidos en el paquete básico -->
            <ul>
                <li>Limpieza de superficies</li>
                <li>Aspirado de habitaciones</li>
                <li>Limpieza de baños</li>
            </ul>
            <!-- Precio del paquete -->
            <p><strong>Precio: </strong>$100</p>
            <!-- Botón que activa el modal con más información -->
            <button type="button" class="btn btn-saber-mas" data-toggle="modal" data-target="#basicoModal">Saber más</button>
        </div>
    </div>
    <!-- Modal con detalles del paquete básico -->
    <div class="modal fade" id="basicoModal" tabindex="-1" role="dialog" aria-labelledby="basicoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!-- Contenido del modal -->
            <div class="modal-content">
                <!-- Cabecera del modal -->
                <div class="modal-header">
                    <!-- Título del modal -->
                    <h5 class="modal-title" id="basicoModalLabel">Paquete Básico</h5>
                    <!-- Botón para cerrar el modal -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Cuerpo del modal con descripción del paquete -->
                <div class="modal-body">
                    Perfecto para el mantenimiento regular de tu hogar. Incluye limpieza de superficies, aspirado de habitaciones y limpieza de baños.
                </div>
                <!-- Pie de modal con enlace para contratar -->
                <div class="modal-footer">
                    <!-- Enlace para iniciar una conversación en WhatsApp para contratar el servicio -->
                    <a href="https://api.whatsapp.com/send?phone=50370921893&text=Estoy%20interesado%20en%20el%20paquete%20básico%20y%20me%20gustaría%20obtener%20más%20información%20para%20contratar%20el%20servicio." target="_blank">
                    <button type="button" class="btn btn-contratar">Contratar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Paquete Premium -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Premium</h5>
                    <ul>
                        <li>Limpieza de superficies</li>
                        <li>Aspirado de habitaciones y salas</li>
                        <li>Limpieza profunda de baños</li>
                        <li>Limpieza de cocina</li>
                    </ul>
                    <p><strong>Precio: </strong>$200</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#premiumModal">Saber más</button>
                </div>
            </div>
            <!-- Modal Premium -->
            <div class="modal fade" id="premiumModal" tabindex="-1" role="dialog" aria-labelledby="premiumModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="premiumModalLabel">Paquete Premium</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Un servicio completo para tu hogar. Además de los servicios básicos, incluye limpieza profunda de baños y cocina.
                        </div>
                        <div class="modal-footer">
                        <a href="https://api.whatsapp.com/send?phone==503 70921893&text=Estoy%20interesado%20en%20el%20paquete%20Premium%20y%20me%20gustaría%20obtener%20más%20información%20para%20contratar%20el%20servicio." target="_blank">
                         <button type="button" class="btn btn-success">Contratar </button>
                         </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paquete Deluxe -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Deluxe</h5>
                    <ul>
                        <li>Limpieza de superficies</li>
                        <li>Aspirado completo</li>
                        <li>Limpieza profunda de baños y cocina</li>
                        <li>Lavado de ventanas</li>
                        <li>Limpieza de exterior (jardín o patio)</li>
                    </ul>
                    <p><strong>Precio: </strong>$300</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deluxeModal">Saber más</button>
                </div>
            </div>
            <!-- Modal Deluxe -->
            <div class="modal fade" id="deluxeModal" tabindex="-1" role="dialog" aria-labelledby="deluxeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deluxeModalLabel">Paquete Deluxe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            El paquete más completo para tu hogar. Además de todos los servicios del paquete premium, incluye lavado de ventanas y limpieza de exteriores.
                        </div>
                        <div class="modal-footer">
                        <a href="https://api.whatsapp.com/send?phone==503 70921893&text=Estoy%20interesado%20en%20el%20paquete%20PDeluxe%20y%20me%20gustaría%20obtener%20más%20información%20para%20contratar%20el%20servicio." target="_blank">
                            <button type="button" class="btn btn-success">Contratar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paquete Personalizado -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Personalizado</h5>
                    <p>Elige los servicios que necesites y arma tu propio paquete de limpieza.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#personalizadoModal">Saber más</button>
                </div>
            </div>
            <!-- Modal Personalizado -->
            <div class="modal fade" id="personalizadoModal" tabindex="-1" role="dialog" aria-labelledby="personalizadoModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="personalizadoModalLabel">Paquete Personalizado</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Personaliza tu paquete según tus necesidades específicas. Elije los servicios que necesites y obtén una solución adaptada a ti.
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="location.href='../form33/limpieza.php'">Contratar</button>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<p>
<div id="miCarrusel" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#miCarrusel" data-slide-to="0" class="active"></li>
    <li data-target="#miCarrusel" data-slide-to="1"></li>
    <li data-target="#miCarrusel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper para slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/a.jpg" alt="Primer slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/b.jpg" alt="Segundo slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/c.jpg" alt="Tercer slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/d.jpg" alt="cuarto slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/e.jpg" alt="quinto slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/f.jpg" alt="sexto slide">
    </div>
  <!-- Controles -->
  <a class="carousel-control-prev" href="#miCarrusel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#miCarrusel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
    <p>
<!-- Galería de Trabajos -->
<section id="gallery" class="my-5">
    <div class="container">
        <h2 class="text-center mb-4" style=" font-weight: bold;">Galería de Trabajos</h2>
        <div class="grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
            <div class="grid-item" style="overflow: hidden;">
                <img src="img/4 (2).jpg" alt="Trabajo 1" style="width: 100%; height: auto; transition: transform .3s ease;">
            </div>
            <div class="grid-item" style="overflow: hidden;">
                <img src="img/2.jpg" alt="Trabajo 2" style="width: 100%; height: auto; transition: transform .3s ease;">
            </div>
            <div class="grid-item" style="overflow: hidden;">
                <img src="img/4.jpg" alt="Trabajo 3" style="width: 100%; height: auto; transition: transform .3s ease;">
            </div>
            <div class="grid-item" style="overflow: hidden;">
                <img src="img/5.jpg" alt="Trabajo 4" style="width: 100%; height: auto; transition: transform .3s ease;">
            </div>
            <div class="grid-item" style="overflow: hidden;">
                <img src="img/6.jpg" alt="Trabajo 5" style="width: 100%; height: auto; transition: transform .3s ease;">
            </div>
            <!-- Agregar más elementos de la cuadrícula según sea necesario -->
        </div>
    </div>
</section>
<P>
<P>
<P>
<!-- Sección de Preguntas Frecuentes (FAQ) -->
<section id="faq" class="my-9" style="background-color: #eef2f7;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-weight: bold;">Preguntas Frecuentes</h2>
        <div id="accordionFAQ">
            <!-- Pregunta 1 -->
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header" id="headingOne" style="background-color: #f8f9fa;">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #0056b3; text-decoration: none;">
                            ¿Cuál es su horario de servicio?
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                    <div class="card-body" style="background-color: #ffffff;">
                        Nuestro horario de servicio es de lunes a viernes de 8:00 a.m. a 5:00 p.m.
                    </div>
                </div>
            </div>
            <!-- Pregunta 2 -->
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header" id="headingTwo" style="background-color: #f8f9fa;">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #28a745; text-decoration: none;">
                            ¿Ofrecen servicios de limpieza para eventos especiales?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                    <div class="card-body" style="background-color: #ffffff;">
                        Sí, ofrecemos servicios de limpieza antes y después de eventos especiales. Por favor contáctenos para más detalles.
                    </div>
                </div>
            </div>
            <!-- Pregunta 3 -->
            <div class="card border-0 shadow-sm">
                <div class="card-header" id="headingThree" style="background-color: #f8f9fa;">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #17a2b8; text-decoration: none;">
                            ¿Qué medidas de seguridad siguen durante la limpieza?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                    <div class="card-body" style="background-color: #ffffff;">
                        La seguridad de nuestros clientes y empleados es nuestra máxima prioridad. Seguimos todas las normas de seguridad y salud recomendadas, incluyendo el uso de EPP y la desinfección de nuestras herramientas.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Blog y Consejos de Limpieza -->
<section id="blog" class="my-5" style="background-color: #fafafa;">
    <div class="container">
        <h2 class="text-center mb-4" style=" font-weight: bold;">Blog y Consejos</h2>
        <div class="row">
            <!-- Artículo 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img class="card-img-top" src="img/articulo1.jpg" alt="Imagen del artículo" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0056b3;">Top 20 de Productos de Limpieza para el Hogar</h5>
                        <p class="card-text">Descubre los mejores productos para mantener tu hogar siempre limpio y libre de gérmenes. Desde trucos para limpiar baños hasta cómo mantener impecables tus pisos de madera y mucho más.</p>
                        <a href="https://www.cleanipedia.com/ar/limpieza-de-pisos-y-superficies/mejores-productos-de-limpieza.html#:~:text=Top%2020%20de%20productos%20de,22%20de%20marzo%20de%202023" class="btn btn-outline-primary btn-block">Leer más</a>
                    </div>
                </div>
            </div>
            <!-- Artículo 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img class="card-img-top" src="img/articulo2.jpg" alt="Imagen del artículo" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #28a745;">Elementos Esenciales de Limpieza para el Hogar</h5>
                        <p class="card-text">Conoce los productos especializados que no pueden faltar en tu casa, como quitamanchas y jabón líquido, y cómo enfrentar la suciedad más difícil para mantener un entorno impecable.</p>
                        <a href="https://www.cleanipedia.com/ar/en-casa/distintos-tipos-y-usos-de-productos-de-limpieza.html#:~:text=Quitamanchas%20Jab%C3%B3n%20l%C3%ADquido%20o%20sanitizante,con%20la%20suciedad%20m%C3%A1s%20rebelde" class="btn btn-outline-success btn-block">Leer más</a>
                    </div>
                </div>
            </div>
            <!-- Artículo 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img class="card-img-top" src="img/articulo3.jpg" alt="Imagen del artículo" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #17a2b8;">El Concepto y la Importancia de la Limpieza</h5>
                        <p class="card-text">Explora el significado del acto de limpieza, cómo se relaciona con la pulcritud de nuestros espacios y por qué es esencial para un ambiente saludable y estético.</p>
                        <a href="https://concepto.de/limpieza/#:~:text=%C2%BFQu%C3%A9%20es%20la%20limpieza%3F%20Cuando,dicho%20espacio%2C%20ambiente%20u%20objeto" class="btn btn-outline-info btn-block">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<p>
     <!-- Sección de Video con Título -->
   <div class="video-section">
        <video autoplay loop muted class="background-video">
            <source src="vid1.mp4" type="video/mp4">
        </video>
        <div class="video-content">
            <h1>Servicios de Limpieza Profesional</h1>
            <p>Donde cada detalle cuenta y la limpieza trasciende a confort para su espacio.</p>
        </div>
    </div>
    <p>
  <!-- ¿Cómo trabajamos? -->
<section id="how-we-work" class="how-we-work-section py-5 bg-light ">
    <div class="container">
        <h2 class="text-center mb-5">¿Cómo trabajamos?</h2>
        <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <img class="card-img-top rounded-3" src="img/calidad.jpg" alt="Calidad Garantizada">
                    <div class="card-body">
                        <h3 class="card-title">Calidad Garantizada</h3>
                        <p class="card-text">En VPcleaning, la excelencia es nuestro estándar. Nuestro equipo altamente capacitado garantiza un servicio de limpieza detallado y de alta calidad para tu hogar o negocio, utilizando los mejores productos y técnicas del mercado.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <img class="card-img-top rounded-3" src="img/personalizada.jpg" alt="Atención Personalizada">
                    <div class="card-body">
                        <h3 class="card-title">Atención Personalizada</h3>
                        <p class="card-text">Cada espacio es único, y en VPcleaning lo entendemos. Por eso ofrecemos planes de limpieza personalizados que se adaptan a las necesidades específicas de cada cliente, asegurando su completa satisfacción.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-7">
                    <img class="card-img-top rounded-3" src="img/ambiente.jpg" alt="Compromiso Ambiental">
                    <div class="card-body">
                        <h3 class="card-title">Compromiso Ambiental</h3>
                        <p class="card-text">Comprometidos con el cuidado del medio ambiente, en VPcleaning utilizamos productos ecológicos y sostenibles. Nuestro compromiso es ofrecer un servicio de limpieza que sea seguro tanto para tu familia como para el planeta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Certificaciones y Asociaciones -->
<section id="certifications" class="my-5" style="background-color: #f4f4f4; padding: 10px;">
    <div class="container">
        <h2 class="text-center mb-4" style="color: #2a9d8f;">Certificaciones de VPcleaning</h2>
        <div class="row text-center">
            <!-- Certificación 1: Excelencia en Servicio -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-primary" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="img/exelencia.jpg" alt="Logo de Excelencia en Servicio" class="card-img-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0056b3;">Excelencia en Servicio</h5>
                        <p class="card-text">Reconocimiento a la calidad superior y atención al detalle en todos nuestros servicios de limpieza.</p>
                    </div>
                </div>
            </div>
            <!-- Certificación 2: Limpieza Eco-Amigable -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-success" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="img/gren.jpg" alt="Logo de Limpieza Eco-Amigable" class="card-img-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #158467;">Limpieza Eco-Amigable</h5>
                        <p class="card-text">Acreditación por nuestro compromiso con prácticas sostenibles y uso de productos eco-amigables.</p>
                    </div>
                </div>
            </div>
            <!-- Certificación 3: Tecnología Innovadora en Limpieza -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-info" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="img/innovacion.jpg" alt="Logo de Tecnología Innovadora en Limpieza" class="card-img-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #17a2b8;">Innovación en Limpieza</h5>
                        <p class="card-text">Distinción por la implementación de tecnología de vanguardia para una limpieza más eficiente y profunda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<p>
   
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contactanos</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>San MIguel,EL Salvador</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>vpcleaning549@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+503 70921893</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.1234567890123!2d-122.4012345!3d37.7890123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f80c6a5b6d123%3A0xaeb6a1234567890!2sYour+Business+Name!5e0!3m2!1sen!2sus!4v1234567890123" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>
          
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <!-- Actualiza la acción para apuntar a 'send-email.php' -->
        <form id="contact-form" action="datos/send-email1.php" method="post" role="form" class="php-email-form" onsubmit="showSuccessAlert(); return false;">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Tu Nombre</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Tu Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="subject">tema</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading...</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ah sido enviado,gracias!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      </div>
    </section><!-- End Contact Section -->
    <p>
<!-- Botón de chatbot -->
<button id="chatbotButton" onclick="toggleChatbot()">VPclean</button>

<!-- Ventana de chatbot -->
<div id="chatbotContainer" class="chatbot-container" style="display:none;">
  <div class="chatbot-header">
    <span>Chat con nosotros</span>
    <button onclick="toggleChatbot()">X</button>
  </div>
  <div class="chatbot-body">
    <div id="chatbotMessages" class="chatbot-messages"></div>
  </div>
  <div class="chatbot-input-container">
    <input type="text" id="chatbotInput" placeholder="Escribe tu mensaje aquí..." onkeypress="handleUserInput(event)">
    <button onclick="sendUserMessage()">Enviar</button>
  </div>
</div>



 
<!-- Inicio del Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2023 VPCleaning - Todos los derechos reservados.</p>
    </div>
</footer>
<!-- Fin del Footer -->

<!-- jQuery (necesario para los plugins de JavaScript de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Popper.js (necesario para algunos componentes como tooltips y popovers) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

<!-- JavaScript de Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/form-handler"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="chatbot.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>

</html>
