<div class="container">
    <h2><?= esc($title) ?></h2>
    <p>No se pueden crear productos porque no hay secciones disponibles. Por favor, cree al menos una sección antes de continuar.</p>
    <a class="btn col-7.5 bgLim text-light" href="<?php echo base_url('/products'); ?>">Volver al listado de productos</a>
    <a class="btn col-7.5 bgLim text-light" href="<?php echo base_url('/secciones'); ?>">Ir al listado de secciones</a>

</div>
