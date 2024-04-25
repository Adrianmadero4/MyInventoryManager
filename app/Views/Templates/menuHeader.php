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
<nav class="navbar navbar-expand-lg navbar-white bg-secondary static-top">
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