<div class="container">
    <h2><?= esc($title) . $products['nombreProducto'] ?></h2> <!--Concateno el nombre del producto al title del conteoller -->

    <a class="btn col-7.5 bgLim text-light" href="<?php echo base_url('/products'); ?>">Volver al listado</a>

    <br><br><br>

    <?php if (! empty($products) && is_array($products)):?>

        <form action="./updated/<?= esc($products['id']) ?>"  method="post">
            <?= csrf_field() ?>

            <!--Le pasamos todos los campos para que los muestre, queramos o no queramos modificar. -->
            <label for="nombreProducto">Title</label>
            <input type="input" name="nombreProducto" value="<?= esc($products['nombreProducto']) ?>">
            <br>

            <label for="descripcion">Text</label>
            <textarea name="descripcion" cols="45" rows="4">  <?= esc($products['descripcion']) ?></textarea>
            <br>
            <label for="nombre_seccion">Sección</label>
            <select name="id_seccion">

                <?php if (! empty($section) && is_array($section)): ?>

                    <?php foreach ($section as $section_item): ?>

                        <option value="<?= $section_item['id'] ?>"
                            <?php if($section_item['id'] == esc($products['id_seccion'])):?> selected <?php endif ?> >
                            <?= $section_item['nombre_seccion']  ?>
                        </option>

                    <?php endforeach ?>
                <?php endif ?>
            </select>
            <input type="submit" name="submit" value="Update item">
        </form>

    <?php endif ?>
</div>