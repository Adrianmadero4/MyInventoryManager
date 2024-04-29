<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Inventory Manager</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

    </head>
<body>

<!-- Navigation -->
<header class="container py-3">
    <div class=" container-fluid d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="<?php echo base_url(''); ?>" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">My Inventory Manager</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="<?php echo base_url(''); ?>">Inicio</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="<?php echo base_url('conocenos'); ?>">Conocenos</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="<?php echo base_url('pricing'); ?>">Precios</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="<?php echo base_url('admin'); ?>">Login</a>
        <?php
        $session = session();
        if (!empty($session->get('user'))) :
        ?>
        <a class="me-3 py-2 text-dark text-decoration-none" href="<?= base_url('categories')?>">Secciones</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="<?= base_url('products')?>">Productos</a>
        <a class="py-2 text-dark text-decoration-none" href="<?= base_url('session')?>">Cerrar sesion</a>
        <?php endif ?>
      </nav>
    </div>
  </header>
<!--<nav class="navbar navbar-expand-lg navbar-white bg-secondary static-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url(''); ?>">
      <img src="<?php echo base_url('public/images/myLogo.png'); ?>" alt="..." height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url(''); ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('pricing'); ?>">Precios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('contact'); ?>">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('login'); ?>">Iniciar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>