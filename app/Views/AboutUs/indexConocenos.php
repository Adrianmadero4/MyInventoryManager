<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/aboutUsStyle.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/generalStyle.css'); ?>">


    <title>Contacto</title>
  </head>

  
  <section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<span class="text-muted">Our Story</span>
				<h2 class="display-5 fw-bold">About Us</h2>
        <p class="lead">Nacimos en 2024 como proyecto de inventario para un trabajo de final de ciclo. Desde entonces
          no se ha parado de desarrollar y mejorar las funcionalidades de este inventario online para poder ofrecer los mejores
          servicios de inventariado online.
        </p>
				<p class="lead">En My Inventory Manager, estamos comprometidos a ofrecerte una solución práctica 
          y eficiente para la gestión del inventario en tu hogar o pequeña empresa. Nuestra plataforma 
          proporciona una manera intuitiva y conveniente de llevar un registro de todos los productos 
          que posees, desde electrodomésticos hasta muebles y dispositivos electrónicos.</p>
          <!-- <img src="public/images/imgProducts.png" alt="Imagen 1" style="width: 100%;" class="me-2"> -->
			</div>
			<div class="col-md-6 offset-md-1">
				<p class="lead">Nuestro equipo está formado por apasionados del desarrollo web y la tecnología, 
          con amplia experiencia en la creación de aplicaciones web innovadoras y funcionales. 
          Nos esforzamos por brindarte una experiencia fluida y satisfactoria al utilizar nuestra 
          aplicación.</p>
				<p class="lead">En My Inventory Manager, entendemos las necesidades cambiantes de los usuarios y 
          nos comprometemos a mantenernos actualizados con las últimas tendencias y tecnologías. 
          Estamos aquí para ayudarte a organizar y gestionar tu inventario de manera eficaz, para que 
          puedas concentrarte en lo que realmente importa.</p>
          <p class="lead">
          Únete a nosotros en este viaje para simplificar la gestión de inventario y llevar 
          el control de tus bienes de manera inteligente y eficiente. ¡Gracias por elegirnos 
          como tu solución de gestión de inventario!
        </p>
			</div>
		</div>
	</div>
</section>
<section class="py-5 bg-light">
  <div class="container ">
    <div class="row">
      <div class="col-md-5">
        <h2 class="display-5 fw-bold mb-4 text-primary text-center">Preguntas Frecuentes</h2>
        <div class="mb-4 faq-item bgWhite">
          <p class="lead faq-question">¿Cómo me inscribo? <span class="toggle-symbol">+</span></p>
          <p class="faq-answer"> Todas las cuentas, incluidas las suscripciones de pago, comienzan con nuestro proceso de registro gratuito. 
            Haga clic en el enlace <a class="me-3 py-2 text-dark text-decoration-none" style="font-weight: bold;" href="<?php echo base_url('register'); ?>">Regístrese</a>
            para comenzar su registro.
          </p>
        </div>
        <div class="mb-4 faq-item bgWhite">
          <p class="lead faq-question ">¿Cómo empiezo a crear productos? <span class="toggle-symbol">+</span></p>
          <p class="faq-answer"> Primero será necesario ir al apartado de secciones para crear una. Luego ya podemos ir a productos
            para asociar el producto a la sección creada. Si se quiere asociar el producto a otra sección, solo es necesario crearla.
          </p>
        </div>
        <div class="mb-4 faq-item bgWhite">
          <p class="lead faq-question">Solo trabajamos en el horario abajo indicado? <span class="toggle-symbol">+</span></p>
          <p class="faq-answer"> Además del horario indicado, revisamos en otros momentos el funcionamiento del sistema así como 
            respondemos correos con indidencias a la mayor brevedad.
          </p>
        </div>
      </div>
      <!-- <div class="col-md-6 offset-md-1"> -->
      <div class="col-md-6 offset-md-1 display-5 fw-bold mb-4 text-primary text-center">
        <aside class="bgWhite">
          <p class="">Contáctenos</p>
          <div class="helpLink mb-4">
            <h4 id="emailAddress">support@myinventorymanager.com</h4>
            <span id="copiedText">Copiado en el portapapeles</span>
          </div>
          <div class="offset-1">
          <p class="helpText col-md-11" style="padding-bottom: 10%;">
            Responderemos a su email lo antes posible. El equipo de My Inventory Manager responderá a cualquier pregunta y revisará cualquier sugerencia. Apreciamos sus comentarios.
          </p>
          </div>
       </aside>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript -->
<script src="<?php echo base_url('public/assets/aboutUsJs.js'); ?>"></script>
<script src="<?php echo base_url('public/assets/copyEmail.js'); ?>"></script>

</html>