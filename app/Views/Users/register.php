<form action="<?= site_url('/register'); ?>" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="username">Nombre de usuario</label>
        <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>">
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>">
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Registrarse</button>
</form>
