<div class="container">
    <h2><?= esc($title)?></h2> <!--Esto viene del controlador ProductsController -->


    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <a class="" href="<?php echo base_url('/products'); ?>">Volver al listado</a>


    <form action="./createProduct" method="post">
        <?= csrf_field() ?> <!--Genera una entrada oculta para ayudarnos a protegernos contra posibles ataques mediante al creación de un token adecuado. -->

        <label for="nombreProducto">Nombre del producto</label>
        <input type="input" name="nombreProducto" value="<?= set_value('nombreProducto') ?>"> <!--El set value permite tener el registro escrito en caso de error, para no tener que escribir todo de nuevo -->
        <br>

        <label for="id_categoria">Sección</label>
        <input type="input" name="id_categoria" value="<?= set_value('id_categoria') ?>">
        <br>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" cols="45" rows="4"><?= set_value('descripcion') ?></textarea>
        <br>

        <label for="stock">Stock</label>
        <input type="number" name="stock" cols="45" rows="4"><?= set_value('stock') ?></textarea>
        <br>

        <label for="guardado_en">Guardado en</label>
        <input type="input" name="guardado_en" cols="45" rows="4"><?= set_value('guardado_en') ?></textarea>
        <br>

        <input type="submit" name="submit" value="Create products item">
    </form>
</div>