<div class="container">
    <h2 class="text-center"><?= esc($title) . $products['nombreProducto'] ?></h2>

    <?php if (isset($errors) && !empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <?php if (!empty($products)): ?>
        <form action="<?= base_url('products/update/updated/' . $products['id']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="nombreProducto">Nombre </label>
                        <input type="input" name="nombreProducto" value="<?= esc($products['nombreProducto']) ?>" class="form-control">
                    </div>
                    <label for="nombre_seccion" class="">Sección</label>
                    <select name="id_seccion" class="form-control mb-2">
                        <?php if (!empty($sections) && is_array($sections)): ?>
                        <?php foreach ($sections as $section): ?>
                        <option value="<?= $section['id'] ?>" <?= ($section['id'] == $products['id_seccion']) ? 'selected' : '' ?>>
                        <?= $section['nombre_seccion'] ?>
                        </option>
                        <?php endforeach ?>
                        <?php endif ?>
                    </select>
                    <label for="nombre_seccion" class="">Sección</label>
                    <select name="id_seccion" class="form-control mb-2">
                        <?php if (!empty($sections) && is_array($sections)): ?>
                            <?php foreach ($sections as $section): ?>
                                <option value="<?= $section['id'] ?>" <?= ($section['id'] == $products['id_seccion']) ? 'selected' : '' ?>>
                                    <?= $section['nombre_seccion'] ?>
                                </option>
                            <?php endforeach ?>
                        <?php endif ?>
                    </select>

                    <div class="form-group mb-2">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control"><?= esc($products['descripcion']) ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" value="<?= esc($products['stock']) ?>" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="guardado_en">Guardado en</label>
                        <input type="input" name="guardado_en" value="<?= esc($products['guardado_en']) ?>" class="form-control">
                    </div>               
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="precio_compra">Precio de Compra</label>
                        <input type="text" name="precio_compra" value="<?= esc($products['precio_compra']) ?>" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="precio_venta">Precio de Venta</label>
                        <input type="text" name="precio_venta" value="<?= esc($products['precio_venta']) ?>" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="fecha_compra">Fecha de Compra</label>
                        <input type="date" name="fecha_compra" value="<?= esc($products['fecha_compra']) ?>" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="fecha_venta">Fecha de Venta</label>
                        <input type="date" name="fecha_venta" value="<?= esc($products['fecha_venta']) ?>" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="documentos">Documentos</label>
                        <input type="file" class="form-control-file" name="documentos">
                    </div>

                    <div class="form-group mb-4">
                        <label for="imagen">Imagen</label>
                        <input type="file" class="form-control-file" name="imagen">
                    </div>

                    <div class="form-group mb-4">
                        <input type="submit" name="submit" value="Actualizar producto" class="btn btn-primary">
                    </div>
                </div>
            </div>





        </form>
    <?php endif ?>
    <a class="btn col-7.5 bgLim text-light mb-4" href="<?= base_url('/products'); ?>">Volver al listado de productos</a>
</div>
