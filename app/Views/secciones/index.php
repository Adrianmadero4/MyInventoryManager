<div class="container">
    <h2><?= esc($title) ?></h2>

    <a href="./secciones/new">Añadir Sección</a>

    <?php if (! empty($section) && is_array($section)): ?>

        <?php foreach ($section as $sect): ?>

            <h4><?= esc($cat['section']) ?></h4>
        
            &nbsp;
            <a  class="btn btn-outline-secondary" href="./secciones/del/<?= esc($sect['id'], 'url') ?>">
                Eliminar Sección
                </a>
            
                &nbsp;
            <a class="btn btn-warning" href="./secciones/update/<?= esc($sect['id'], 'url') ?>">
                Actualizar Sección
                </a>
            </p>
            <br>
        <?php endforeach ?>

    <?php else: ?>

        <h3>No secciones</h3>

        <p>Unable to find any section for you.</p>

    <?php endif ?>

</div>