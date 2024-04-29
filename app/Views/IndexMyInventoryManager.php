
    <div class="container mt-4 mb-4">

        <h1>Bienvenid@ a <?php echo $nombreProyecto ?> </h1> <!--Este echo viene del controlador Home.php -->

        <h2>Aquí podrá tener el control de sus productos. <br>
            En <?php echo $nombreProyecto ?> se puede tener las partes del hogar diferenciadas, 
            y en cada una de ellas, los distintos productos que la forman. 
        </h2>

    </div>

</header>

<!-- CONTENT -->
<div class="container">
<div class="row">
 <!-- Sección de Header -->
 <header>
  <!-- Sección de Nav -->
  <nav class="navbar navbar-default" role="navigation">
   <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="#">Proyecto Autogestión</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="#">Nosotros</a></li>
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <span class="caret"></span></a>
       <ul class="dropdown-menu" role="menu">
        <li><a href="#">Desarrollos</a></li>
        <li><a href="#">Diseño</a></li>
        <li><a href="#">Publicidad</a></li>
        <li class="divider"></li>
        <li><a href="#">Consultoria</a></li>
        <li class="divider"></li>
        <li><a href="#">Otros</a></li>
       </ul>
      </li>
      <li><a href="#">Contacto</a></li>
     </ul>

     <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
       <input type="text" class="form-control" placeholder="Buscador">
      </div>
      <button type="submit" class="btn btn-default">Buscar</button>
     </form>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Usuario</a></li>
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta <span class="caret"></span></a>
       <ul class="dropdown-menu" role="menu">
        <li><a href="#">Ingresar</a></li>
        <li><a href="#">Registrarse</a></li>
        <li><a href="#">Configuración</a></li>
        <li class="divider"></li>
        <li><a href="#">Cerrar Sesión</a></li>
       </ul>
      </li>
     </ul>
    </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
  </nav><!-- Fin Sección de Nav -->
 </header><!-- Fin Sección de Header -->
</div>
</div>


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





</div>  <!-- Fin Sección de Artículos -->




<!-- FOOTER: DEBUG INFO + COPYRIGHTS (En plantilla footer) -->


</body>
</html>
