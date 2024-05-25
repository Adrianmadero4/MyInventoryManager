<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<div class="container">
    <h2><?= esc($title)?></h2>

    <p class="text-danger"><?= session()->getFlashdata('error') ?></p>
    <?= validation_list_errors() ?>

    <a class="btn col-7.5 bgLim text-light mb-4" href="<?php echo base_url('/products'); ?>">Volver al listado de productos</a>

    <div class="row">
        <div class="col-md-6">
            <form action="<?= site_url('products/createProduct'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group mb-2">
                    <label for="nombreProducto">Nombre del producto</label>
                    <input type="input" class="form-control" name="nombreProducto" value="<?= set_value('nombreProducto') ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="nombre_seccion">Sección</label>
                    <select name="id_seccion">
                        <?php if (!empty($section) && is_array($section)): ?>
                            <?php foreach ($section as $section_item): ?>
                                <option value="<?= $section_item['id'] ?>">
                                    <?= $section_item['nombre_seccion'] ?>
                                </option>
                            <?php endforeach ?>
                        <?php endif ?>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" rows="4"><?= set_value('descripcion') ?></textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" name="stock" value="<?= set_value('stock') ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="guardado_en">Guardado en</label>
                    <input type="input" class="form-control" name="guardado_en" value="<?= set_value('guardado_en') ?>">
                </div>
        </div>

        <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="precio_compra">Precio de compra</label>
                    <input type="text" class="form-control" name="precio_compra" value="<?= set_value('precio_compra') ?>" pattern="[0-9]+(\.[0-9]{1,2})?" title="Ingrese un número válido con máximo dos decimales">
                </div>

                <div class="form-group mb-2">
                    <label for="precio_venta">Precio de venta</label>
                    <input type="text" class="form-control" name="precio_venta" value="<?= set_value('precio_venta') ?>" pattern="[0-9]+(\.[0-9]{1,2})?" title="Ingrese un número válido con máximo dos decimales">
                </div>

                <div class="form-group mb-2">
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

                <div class="form-group mb-4">
                    <label for="documentos">Documentos</label>
                    <input type="file" class="form-control-file" name="documentos">
                </div>
                <button type="submit" class="btn btn-primary mb-4">Crear producto</button>
            </form>
        </div>
    </div>
</div>
