<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- <title><?//php echo $nombreProyecto ?></title> -->
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/generalStyle.css'); ?>">
    <link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

  </head>

<!-- Navigation -->
<header class="container py-2">
    <div class=" container-fluid d-flex flex-column flex-md-row align-items-center pb-3 border-bottom">
      <a href="<?php echo base_url(''); ?>" class="d-flex align-items-center text-dark text-decoration-none">
      <img src="<?php echo base_url('public/images/logoMiM.png'); ?>" alt="Logo" style="max-width: 200px;" class="me-2"> <!--ruta absoluta para evitar errores con el logo al cambiar de niveles -->
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto ">
      <?php
        $session = session();
        if (empty($session->get('user'))) :
        ?>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url(''); ?>">Inicio</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url('conocenos'); ?>">Conócenos</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url('pricing'); ?>">Precios</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url('login'); ?>">Iniciar sesión 👲</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url('register'); ?>">Regístrate</a>
        <?php endif ?>

        <?php
        $session = session();
        if (!empty($session->get('user'))) :
        ?>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url(''); ?>">Inicio</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url('conocenos'); ?>">Conócenos</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url('pricing'); ?>">Precios</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?= base_url('secciones')?>">Secciones</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?= base_url('products')?>">Productos</a>
        <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url('admin'); ?>">Cuenta</a>
        <a class="py-2 text-dark text-decoration-none nav-link" href="<?= base_url('session')?>">Cerrar sesión</a>
        <?php endif ?>
      </nav>
    </div>
  </header>