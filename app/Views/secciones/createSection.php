<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<div class="container">
    <h2><?= esc($title)?></h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <a class="btn col-7.5 bgLim text-light" href="<?php echo base_url('/secciones'); ?>">Volver al listado de secciones</a>

    <div class="row">
        <div class="col-md-6">
            <!-- <form action="./createProduct" method="post"> -->
            <form action="<?= site_url('secciones/createSection'); ?>" method="post" enctype="multipart/form-data">  <!-- enctype="multipart/form-data" para poder subir imagenes correctamente --> 



                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="nombre_seccion">Nombre de la sección</label>
                    <input type="input" class="form-control" name="nombre_seccion" value="<?= set_value('nombre_seccion') ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control-file" name="imagen">
                </div>
                <button type="submit" class="btn btn-primary">Crear Sección</button>
            </form>



        </div>
    </div>
</div>
