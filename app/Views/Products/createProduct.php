<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<div class="container">
    <h2><?= esc($title)?></h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <a class="btn col-7.5 bgLim text-light" href="<?php echo base_url('/products'); ?>">Volver al listado</a>

    <div class="row">
        <div class="col-md-6">
            <!-- <form action="./createProduct" method="post"> -->
            <form action="<?= site_url('products/createProduct'); ?>" method="post"> 



                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="nombreProducto">Nombre del producto</label>
                    <input type="input" class="form-control" name="nombreProducto" value="<?= set_value('nombreProducto') ?>">
                </div>

                <div class="form-group">
                    <label for="id_categoria">Sección</label>
                    <input type="input" class="form-control" name="id_categoria" value="<?= set_value('id_categoria') ?>">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" rows="4"><?= set_value('descripcion') ?></textarea>
                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" name="stock" value="<?= set_value('stock') ?>">
                </div>

                <div class="form-group">
                    <label for="guardado_en">Guardado en</label>
                    <input type="input" class="form-control" name="guardado_en" value="<?= set_value('guardado_en') ?>">
                </div>
        </div>

        <div class="col-md-6">

                <div class="form-group">
                    <label for="precio_compra">Precio de compra</label>
                    <input type="number" class="form-control" name="precio_compra" value="<?= set_value('precio_compra') ?>">
                </div>

                <div class="form-group">
                    <label for="precio_venta">Precio de venta</label>
                    <input type="number" class="form-control" name="precio_venta" value="<?= set_value('precio_venta') ?>">
                </div>

                <div class="form-group">
                    <label for="fecha_compra">Fecha de compra</label>
                    <input type="date" class="form-control" name="fecha_compra" value="<?= set_value('fecha_compra') ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="fecha_venta">Fecha de venta</label>
                    <input type="date" class="form-control" name="fecha_venta" value="<?= set_value('fecha_venta') ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control-file" name="imagen">
                </div>

                <div class="form-group mb-2">
                    <label for="documentos">Documentos</label>
                    <input type="file" class="form-control-file" name="documentos">
                </div>
                <button type="submit" class="btn btn-primary">Crear producto</button>
            </form>

        </div>
    </div>
</div>
