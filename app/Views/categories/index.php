<h2><?= esc($title) ?></h2>

<a href="./categories/new">Añadir Categoría</a>

<?php if (! empty($category) && is_array($category)): ?>

    <?php foreach ($category as $cat): ?>

        <h4><?= esc($cat['category']) ?></h4>
       
        &nbsp;
        <a  class="btn btn-outline-secondary" href="./categories/del/<?= esc($cat['id'], 'url') ?>">
            Eliminar Categoria
            </a>
        
            &nbsp;
        <a class="btn btn-warning" href="./categories/update/<?= esc($cat['id'], 'url') ?>">
            Actualizar Categoría
            </a>
        </p>
        <br>
    <?php endforeach ?>

<?php else: ?>

    <h3>No Categories</h3>

    <p>Unable to find any category for you.</p>

<?php endif ?>
