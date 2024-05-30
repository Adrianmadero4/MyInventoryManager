<div class="container">
    <h2 class="text-center"><?= esc($title) ?></h2>

    <?php if (!empty($secciones) && is_array($secciones)): ?>
        <a class="btn col-7.5 bgLim text-light mb-2" href="<?= base_url('secciones/new') ?>">Añadir Sección</a>
        <div class="row">
            <?php foreach ($secciones as $sect): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <?php if (!empty($model->getImagenRuta($sect['id']))): ?>
                            <img class="card-img-top" src="<?= esc($model->getImagenRuta($sect['id'])) ?>">
                        <?php else: ?>
                            <div style="height: 200px; width: 100%; background-color: #fff;"></div>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($sect['nombre_seccion']) ?></h5>
                            <a href="./secciones/update/<?= esc($sect['id'], 'url') ?>" class="btn btn-primary mr-2">Actualizar Sección</a>
                            <a href="./secciones/del/<?= esc($sect['id'], 'url') ?>" class="btn btn-danger">Eliminar Sección</a>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    <?php else: ?>
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">No hay secciones creadas</h4>
            <p>Crea una parte del hogar y empieza a controlar todos tus productos!!.</p>
        </div>
        <a class="btn btn-primary mb-4" href="<?= base_url('secciones/new') ?>">Añadir Sección</a>
    <?php endif ?>
</div>
