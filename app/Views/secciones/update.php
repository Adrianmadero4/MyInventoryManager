<div class="container">
    <p class="text-center">Puedes cambiar el nombre o la foto de tu sección <span style="font-size: larger;"><?= esc($sections['nombre_seccion']) ?></span>. </p>
    
    <?php if (!empty($sections)): ?>
        <form action="<?= base_url('secciones/update/updated/' . $sections['id']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="nombre_seccion">Nombre de la sección</label>
                <input type="text" name="nombre_seccion" value="<?= esc($sections['nombre_seccion']) ?>" class="form-control">
            </div>
            <br>

            <div class="form-group mb-4">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control-file" name="imagen">
            </div>

            <div class="form-group mb-4">
                <input type="submit" name="submit" value="Actualizar sección" class="btn btn-primary">
            </div>
        </form>
        <br>
    <?php endif ?>
    <a class="btn col-7.5 bgLim text-light mb-4" href="<?= base_url('secciones'); ?>">Volver al listado de secciones</a>
</div>
