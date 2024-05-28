<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<div class="container-fluid bgSeccionesPagPrincipal">
    <div class="container ">
        <h2 class="text-center"><?= esc($title)?></h2>

        <p class="text-danger"><?= session()->getFlashdata('error') ?></p>
        <?= validation_list_errors() ?>

        <div class="card">
            <div class="card-body">
                <form action="<?= site_url('secciones/createSection'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <div class="form-group mb-2">
                        <label for="nombre_seccion">Nombre de la sección</label>
                        <input type="input" class="form-control" name="nombre_seccion" value="<?= set_value('nombre_seccion') ?>">
                    </div>

                    <div class="form-group mb-2">
                        <label for="imagen">Imagen</label>
                        <input type="file" class="form-control-file" name="imagen">
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <button type="submit" class="btn btn-primary">Crear Sección</button>
                        <a class="btn btn-secondary" href="<?php echo base_url('/secciones'); ?>">Volver al listado de secciones</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

