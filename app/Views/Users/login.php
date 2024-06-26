<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/generalStyle.css'); ?>">
<div class="container-fluid bgSeccionesPagPrincipal">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center"><?= esc($title) ?></h2> <!--Aquí el title viene del controlador Users.php -->
                <!-- <h2>Area Privada</h2> -->

                <?= session()->getFlashdata('error') ?>
                <?= validation_list_errors() ?>

                <h4 class="text-danger text-center"><?= esc($error) ?></h4>

                <form action="<?php echo base_url('admin'); ?>" method="post">
                    <?= csrf_field() ?> <!-- Token oculto para evitar codigo malicioso -->

                    <div class="mb-3">
                        <label for="username" class="form-label" style="font-weight: bold;">Usuario</label>
                        <input type="input" class="form-control" id="username" name="username" value="<?= set_value('username') ?>">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label" style="font-weight: bold;">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password') ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Continuar</button>                
                </form>
                <div class="">
                    <a class="me-3 py-2 text-light text-decoration-none btn bg-info" href="<?php echo base_url('register'); ?>">No tienes cuenta? Registrate aquí, ¡Es gratis!</a>
                    <button class="btn btn-secondary mb-3 float-end" onclick="window.location.href='<?php echo base_url(''); ?>'">Volver al Inicio</button>
                </div>
            </div>
        </div>
    </section>
</div>
