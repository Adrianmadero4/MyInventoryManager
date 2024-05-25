<div class="container">
    <h2><?= esc($title) . $product['nombreProducto'] ?></h2> <!-- Concateno el nombre del producto al title del controller -->

    <?php if (!empty($product)): ?>
        <form action="<?= base_url('products/update/updated/' . $product['id']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <!-- Le pasamos todos los campos para que los muestre, queramos o no queramos modificar. -->
            <div class="form-group mb-2">
                <label for="nombreProducto">Nombre </label>
                <input type="input" name="nombreProducto" value="<?= esc($product['nombreProducto']) ?>" class="form-control">
            </div>

            <div class="form-group mb-4">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control-file" name="imagen">
            </div>

            <label for="nombre_seccion">Sección</label>
            <select name="id_seccion">
                <?php if (!empty($sections) && is_array($sections)): ?>
                    <?php foreach ($sections as $section): ?>
                        <option value="<?= $section['id'] ?>" <?= ($section['id'] == $product['id_seccion']) ? 'selected' : '' ?>>
                            <?= $section['nombre_seccion'] ?>
                        </option>
                    <?php endforeach ?>
                <?php endif ?>
            </select>

            <div class="form-group mb-4">
                <input type="submit" name="submit" value="Actualizar producto" class="btn btn-primary">
            </div>
        </form>

    <?php endif ?>
    <a class="btn col-7.5 bgLim text-light mb-4" href="<?php echo base_url('/products'); ?>">Volver al listado de productos</a>

</div>
