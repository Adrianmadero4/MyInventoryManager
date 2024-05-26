<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<div class="container text-center">
    <h2><?= esc($title)?></h2>

    <p class="text-danger"><?= session()->getFlashdata('error') ?></p>
    <?= validation_list_errors() ?>

    <a class="btn col-7.5 bgLim text-light mb-4" href="<?php echo base_url('/secciones'); ?>">Volver al listado de secciones</a>

    <div class="row">
        <div class="col-md-6">
            <form action="<?= site_url('secciones/createSection'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group mb-2">
                    <label for="nombre_seccion">Nombre de la sección</label>
                    <input type="input" class="form-control" name="nombre_seccion" value="<?= set_value('nombre_seccion') ?>">
                </div>

                <div class="form-group mb-4">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control-file" name="imagen">
                </div>
                <button type="submit" class="btn btn-primary mb-4">Crear Sección</button>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<div class="container text-center">
    <h2><?= esc($title)?></h2>

    <p class="text-danger"><?= session()->getFlashdata('error') ?></p>
    <?= validation_list_errors() ?>

    <a class="btn col-7.5 bgLim text-light mb-4" href="<?php echo base_url('/secciones'); ?>">Volver al listado de secciones</a>

    <div class="row offset-3">
        <div class="col-md-8">
            <form action="<?= site_url('secciones/createSection'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group mb-2">
                    <label for="nombre_seccion">Nombre de la sección</label>
                    <input type="input" class="form-control" name="nombre_seccion" value="<?= set_value('nombre_seccion') ?>">
                </div>

                <div class="form-group mb-4">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control-file" name="imagen">
                </div>
                <button type="submit" class="btn btn-primary mb-4">Crear Sección</button>
            </form>
        </div>
    </div>
</div>
