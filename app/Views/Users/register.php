<div class="container mt-4">
    <div class="row d-flex justify-content-center">
        <form action="<?= site_url('/register'); ?>" method="post" class="col-4">
        <h1 class="text-center">¡Registrate!</h1>
        <h6 class="mt-4">Solo se necesita nombre de usuario, mail y contraseña</h6>

            <?= csrf_field() ?>

            <div class="form-group mt-4 mb-2">
                <label for="username" style="font-weight: bold;">Nombre de usuario</label>
                <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>">
            </div>

            <div class="form-group mb-2">
                <label for="email" style="font-weight: bold;">Correo electrónico</label>
                <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>">
            </div>

            <div class="form-group mb-4">
                <label for="password" style="font-weight: bold;">Contraseña</label>
                <input type="password" class="form-control mb-2" name="password">
            </div>

            <button type="submit" class="btn bgLim text-light mb-4">Registrarse</button>
        </form>
    </div>

</div>