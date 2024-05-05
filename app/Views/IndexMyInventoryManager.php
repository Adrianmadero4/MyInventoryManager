<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Inventory Manager</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/generalStyle.css'); ?>">
</head>

<body>
    <header>
        <div class="container">
        <div class="row bgVer">
            <div class="col-sm-1 bgPurple">
            Comedor
            </div>
            <div class="col-sm-2 bgOrange">
            Habitacion Principal
            </div>
            <div class="col-sm-2 bgDelete">
            +
            </div>
        </div>
        </div>

        <div class="container mt-4 mb-4">

            <h1>Bienvenid@ a <?php echo $nombreProyecto ?> </h1> <!--Este echo viene del controlador Home.php -->

            <h2>Aquí podrá tener el control de sus productos. <br>
                En <?php echo $nombreProyecto ?> se puede tener las partes del hogar diferenciadas, 
                y en cada una de ellas, los distintos productos que la forman. 
            </h2>

        </div>

    </header>

    <!-- CONTENT -->

    <section>
    
        <!-- Sección Jumbotron -->
        <div class="container">
        <div class="row">
        <div class="jumbotron">
        <h1>Web Básica con Bootstrap 3</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dolorem ad officiis nihil delectus quidem animi rerum, molestias sint natus ducimus quod, unde molestiae dolores laboriosam error facilis odio doloremque.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Leer mas</a></p>
        </div>
        </div>
        </div><!-- Fin Sección Jumbotron -->

    </section>

    <div class="row mt-4">
        <h2 class="text-center">Secciones y productos</h2>
        <div class="col-md-1">
        </div>

        <div class="col-md-5">
            <div class="card mt-3" style="max-width: 400px;">
                <img src="public/images/publicComedor/comedorJysk.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Comedor</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="public/images/publicComedor/MesaComedorMARKSKEL.jpg" alt="Imagen 1" style="max-width: 50px;" class="me-2">
                        Mesa
                    </li>
                    <li class="list-group-item">
                        <img src="public/images/publicComedor/MesaComedorMARKSKEL.jpg" alt="Imagen 2" style="max-width: 50px;" class="me-2">
                        Silla
                    </li>
                    <li class="list-group-item">
                        <img src="public/images/publicComedor/MesaComedorMARKSKEL.jpg" alt="Imagen 3" style="max-width: 50px;" class="me-2">
                        Sofa
                    </li>
                    <li class="list-group-item">
                        <img src="public/images/publicComedor/MesaComedorMARKSKEL.jpg" alt="Imagen 4" style="max-width: 50px;" class="me-2">
                        Televisión
                    </li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Ver la lista completa</a>
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
        
        <div class="col-md-5">
            <div class="card mt-3" style="max-width: 400px;">
                <img src="public/images/publicHab1/HabitacionPrincipal.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Habitación principal</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="public/images/publicComedor/MesaComedorMARKSKEL.jpg" alt="Imagen 5" style="max-width: 50px;" class="me-2">
                        Colchón
                    </li>
                    <li class="list-group-item">
                        <img src="public/images/publicComedor/MesaComedorMARKSKEL.jpg" alt="Imagen 6" style="max-width: 50px;" class="me-2">
                        Canapé
                    </li>
                    <li class="list-group-item">
                        <img src="public/images/publicComedor/MesaComedorMARKSKEL.jpg" alt="Imagen 7" style="max-width: 50px;" class="me-2">
                        Comoda
                    </li>
                    <li class="list-group-item">
                        <img src="public/images/publicComedor/MesaComedorMARKSKEL.jpg" alt="Imagen 8" style="max-width: 50px;" class="me-2">
                        Televisión
                    </li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Ver la lista completa</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Artículos -->
    <div class="container" style="padding: 15px 10px;">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
            <h2>Titulo del articulo 1</h2>
            <figure></figure><!-- Especificar contenido gráfico Ej: Una Imagen -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
            <a href="#" class="btn btn-success">Leer mas</a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
            <h2>Titulo del articulo 2</h2>
            <figure></figure><!-- Especificar contenido gráfico Ej: Una Imagen -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
            <a href="#" class="btn btn-success">Leer mas</a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
            <h2>Titulo del articulo 3</h2>
            <figure></figure><!-- Especificar contenido gráfico Ej: Una Imagen -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
            <a href="#" class="btn btn-success">Leer mas</a>
            </div>
            <!-- Puedes agregar más articulos ... -->
        </div>  
    </div>  <!-- Fin Sección de Artículos -->

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS (En plantilla footer) -->

</body>
</html>
