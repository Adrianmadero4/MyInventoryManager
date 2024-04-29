<h2><?= esc($nombreProducto) ?></h2> <!--Este title es el de la función index del controller-->
<!-- -->
<a href="./products/new">Añadir Producto</a>

<?php if (! empty($products) && is_array($products)): ?> <!--Si el array no está vacío y se puede recorrer: -->

    <?php foreach ($products as $new_product): ?> <!--Recorremos el array de productos y nos inventamos el new_product -->

        <h4><?= esc($new_product['nombreProducto']) ?></h4> <!--Campo de la tabla -->

        <div class="main">
            <?= esc ($new_product['descripcion']) ?>
        </div>

        <!--Ahora el enlace al producto en particular -->

        <p>
            <a href="./products/<?= esc($new_product['nombreProducto'], 'url')?>">Ver Producto</a>
        </p>
       
        &nbsp;
        <a  class="btn btn-outline-secondary" href="./products/del/<?= esc($new_product['id'], 'url') ?>">
            Eliminar Producto
            </a>
        
            &nbsp;
        <a class="btn btn-warning" href="./products/update/<?= esc($new_product['id'], 'url') ?>">
            Actualizar Producto
            </a>
        </p>
        <br>
    <?php endforeach ?>

<?php else: ?>

    <h3>No products</h3>

    <p>Unable to find any product for you.</p>

<?php endif ?>
