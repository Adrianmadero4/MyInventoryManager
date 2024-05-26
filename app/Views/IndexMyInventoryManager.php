<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $nombreProyecto ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/generalStyle.css'); ?>">
</head>

<body>
    <header class="headerColor">
        <div class="container-fluid text-center headerH1PTop">
            <div class="container">
                <!--<h1>Bienvenid@ a <?//php echo $nombreProyecto ?> <br> </h1> Este echo viene del controlador Home.php -->
                <h1 class="mb-4">CONTROLA TODO LO QUE TIENES EN CASA</h1>

                <h3 class="text-center h2-padding"><?php echo $nombreProyecto ?> permite registrar todas tus pertenencias, incluida la posibilidad de subir fotos de tus objetos y su documentación. 
                </h3>
            </div>
        </div>
    </header>


    <!-- CONTENT -->
    <div class="container-fluid bgSeccionesPagPrincipal">
        <div class="container">

            <h2 class="display-4 text-center mb-4 ">Secciones y Productos</h2>
            <h5 class="text-center">Así es como puede quedar tu inventario</h5>                

            <div class="row mt-4">
                <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="card mt-3" style="max-width: 400px;">
                            <img src="public/images/publicComedor/comedorJysk.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center bg-secondary text-light">
                                <h4 class="card-title ">Comedor</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item product-line">
                                    <img src="public/images/mesaComedor.png" alt="Imagen 1" style="max-width: 50px;" class="me-2">
                                    Mesa
                                </li>
                                <li class="list-group-item product-line">
                                    <img src="public/images/silla.jpg" alt="Imagen 2" style="max-width: 50px;" class="me-2">
                                    Silla
                                </li>
                                <li class="list-group-item">
                                    <img src="public/images/sofa.jpg" alt="Imagen 3" style="max-width: 50px; padding-bottom: 1rem;" class="me-2">
                                    Sofá
                                </li>
                                <li class="list-group-item">
                                    <img src="public/images/tv.jpg" alt="Imagen 4" style="max-width: 50px;" class="me-2">
                                    Televisión
                                </li>
                                <li class="list-group-item">
                                <btn href="" class="btn bgLim text-light">Ver lista completa</btn>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="card mt-3" style="max-width: 400px;">
                            <img src="public/images/publicHab1/HabitacionPrincipal.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center bg-secondary text-light">
                                <h4 class="card-title">Habitación principal</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="padding-top: 1rem; padding-bottom: 1rem;">
                                    <img src="public/images/colchon.jpg" alt="Imagen 5" style="max-width: 50px;" class="me-2">
                                    Colchón
                                </li>
                                <li class="list-group-item">
                                    <img src="public/images/canape.jpg" alt="Imagen 6" style="max-width: 50px;" class="me-2">
                                    Canapé
                                </li>
                                <li class="list-group-item">
                                    <img src="public/images/comoda.jpg" alt="Imagen 7" style="max-width: 50px; padding-bottom: 0.3rem;"" class="me-2">
                                    Cómoda
                                </li>
                                <li class="list-group-item">
                                    <img src="public/images/tv.jpg" alt="Imagen 8" style="max-width: 50px;" class="me-2">
                                    Televisión
                                </li>
                                </li>
                                <li class="list-group-item">
                                <btn href="" class="btn bgLim text-light">Ver lista completa</btn>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>


<section class="usSectionColor py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h1 class="display-4 text-center mb-5">¡Organiza tu hogar con facilidad!</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-center shadow-sm mb-5 h-100">
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Aquí está el icono SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-add-fill mb-3" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                        <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                        </svg>
                        <h5 class="card-title">Ubicación</h5>

                        </svg>
                        <!-- Fin del icono SVG -->

                        <p class="card-text">Mantén un registro de la ubicación de cada artículo en tu hogar.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card text-center shadow-sm mb-5 h-100">
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Aquí está el icono SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-checklist mb-3" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                            <h5 class="card-title">Inventario</h5>

                        </svg>
                        <!-- Fin del icono SVG -->

                        <p class="card-text">Organiza tu inventario con facilidad, añadiendo detalles como nombre, precio y fecha de compra.</p>
                    </div>
                </div>
            </div>
                    
            <div class="col-md-4">
                <div class="card text-center shadow-sm mb-5 h-100">
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Aquí está el icono SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-arrow-up mb-3" viewBox="0 0 16 16">
                        <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z"/>
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                        </svg>
                        <h5 class="card-title">Documentación</h5>
                        </svg>
                        <!-- Fin del icono SVG -->
                        <p class="card-text">Guarda la documentación relevante de tus productos para tenerla siempre a mano.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                    

    <!-- Sección de Artículos -->
    <div class="container-fluid bg-light">
        <div class="container paddingTopBottom">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                <img src="public/images/abousUsImgIni.png" class="img-fluid" alt="Imagen de referencia">
                </div>
                <div class="col-lg-6 paddingLeftImg">
                    <h2>Conoce más sobre My Inventory Manager</h2>
                    <p>My Inventory Manager nació en 2024 como un proyecto de final de grado. Desde entonces, hemos mejorado nuestras funcionalidades para ofrecerte la mejor solución de inventariado online.</p>
                    <p>Proporcionamos una manera intuitiva de llevar un registro de todos tus productos, desde electrodomésticos hasta muebles y dispositivos electrónicos.</p>
                    <a href="ruta_de_mas_informacion" class="btn btn-primary">Leer más sobre nosotros</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4 text-center">

            <!--<h1>Bienvenid@ a <?//php echo $nombreProyecto ?> <br> </h1> Este echo viene del controlador Home.php -->

            <h2 class="mb-4">¿A qué esperas? Únete a nosotros.</h2>
            <a href="<?php echo base_url('register'); ?>" class="btn btn-lg btn-outline-primary">Regístrate gratis</a>


        </div>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS (En plantilla footer) -->

</body>
</html>
