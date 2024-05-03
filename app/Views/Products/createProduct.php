<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<div class="container">
    <h2><?= esc($title)?></h2> <!--Esto viene del controlador ProductsController -->


    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <a class="" href="<?php echo base_url('/products'); ?>">Volver al listado</a>


    <form action="./createProduct" method="post">
        <?= csrf_field() ?> <!--Genera una entrada oculta para ayudarnos a protegernos contra posibles ataques mediante al creación de un token adecuado. -->

        <label for="nombreProducto">Nombre del producto</label>
        <input type="input" name="nombreProducto" value="<?= set_value('nombreProducto') ?>"></input> <!--El set value permite tener el registro escrito en caso de error, para no tener que escribir todo de nuevo -->
        <br>

        <label for="id_categoria">Sección</label>
        <input type="input" name="id_categoria" value="<?= set_value('id_categoria') ?>"></input>
        <br>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" cols="45" rows="4"><?= set_value('descripcion') ?></textarea>
        <br>

        <label for="stock">Stock</label>
        <input type="number" name="stock" cols="45" rows="4"><?= set_value('stock') ?></input>
        <br>

        <label for="guardado_en">Guardado en</label>
        <input type="input" name="guardado_en" cols="45" rows="4"><?= set_value('guardado_en') ?></input>
        <br>

        <label for="precio_compra">Precio de compra</label>
        <input type="number" name="precio_compra" cols="45" rows="4"><?= set_value('precio_compra') ?></input>
        <br>

        <label for="precio_venta">Precio de venta</label>
        <input type="number" name="precio_venta" cols="45" rows="4"><?= set_value('precio_venta') ?></input>
        <br>

        <label for="fecha_compra">Fecha de compra</label>
        <input type="date" name="fecha_compra" cols="45" rows="4"><?= set_value('fecha_compra') ?></input>
        <br>

        <label for="fecha_venta">Fecha de venta</label>
        <input type="date" name="fecha_venta" cols="45" rows="4"><?= set_value('fecha_venta') ?></input>
        <br>

        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" cols="45" rows="4"><?= set_value('imagen') ?></input>
        <br>

        <label for="documentos">Documentos</label>
        <input type="file" name="documentos" cols="45" rows="4"><?= set_value('documentos') ?></input>
        <br>

        <input type="submit" name="submit" value="Create products item"></input>
    </form>
</div>