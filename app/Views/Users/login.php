<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/generalStyle.css'); ?>">

<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2><?= esc($title) ?></h2> <!--Aquí el title viene del controlador Users.php -->
            <!-- <h2>Area Privada</h2> -->

            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

            <br><br><br>
            <h1><?= esc($error) ?></h1>

            <form action="<?php echo base_url('login'); ?>" method="post">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="input" class="form-control" id="username" name="username" value="<?= set_value('username') ?>">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password') ?>">
                </div>

                <button type="submit" class="btn btn-primary mb-3">Send</button>                
            </form>
            <a class="me-3 py-2 text-dark text-decoration-none nav-link" href="<?php echo base_url('registro'); ?>">No tienes cuenta? Registrate aquí, ¡Es gratis!</a>
            <button class="btn btn-secondary mb-3 float-end" onclick="window.location.href='<?php echo base_url(''); ?>'">Volver al Inicio</button>
        </div>
    </div>
</section>
