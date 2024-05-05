<div class="container">
<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<h2><?= esc($nombreProducto) ?></h2> <!--Este title es el de la función index del controller-->
<!-- -->
<a class="btn col-7.5 bgLim text-light" href="./products/new">Añadir Producto</a>

<?php if (! empty($products) && is_array($products)): ?> <!--Si el array no está vacío y se puede recorrer: -->

    <div class="container mt-4 mb-4">
        <!-- Primera fila con background gris claro -->
        <div class="row bg-light text-center">
            <!-- Columnas -->
            <div class="col-2">
                <h6>Nombre del Producto</h6>
            </div>
            <div class="col-2">
                <h6>Descripción</h6>
            </div>
            <div class="col-1">
                <h6>Tienes</h6>
            </div>
            <div class="col-2">
                <h6>Guardado en</h6>
            </div>
            
            <div class="col-2">
                <h6>Imagen</h6>
            </div>
            <div class="col-3">
                <h6>Acciones</h6>
            </div>
            <!-- Agrega más columnas según sea necesario -->
        </div>
        
        <?php foreach ($products as $new_product): ?> <!--Recorremos el array de productos y nos inventamos el new_product -->
            <!-- Segunda fila sin fondo -->
            <div class="row align-items-center text-center border">
                <!-- Aquí puedes iterar sobre tus productos -->
                <div class="col-2">
                    <p><?= esc($new_product['nombreProducto']) ?></p> <!--['Nombre del campo de la BBDD'] -->
                </div>
                <div class="col-2">
                    <p><?= esc($new_product['descripcion']) ?></p>
                </div>
                <div class="col-1">
                    <p><?= esc($new_product['stock']) ?></p>
                </div>
                <div class="col-2">
                    <p><?= esc($new_product['guardado_en']) ?></p>
                </div>
                <div class="col-2">
                    <p><?= esc($new_product['imagen']) ?></p>
                </div>
                <div class="col-3">
                    <!-- <button class="col-7.5 bg-light">Ver producto/Editar</button> 
                    <button class="col-4 bg-light">Eliminar</button> -->
                    <a class="btn col-7.5 bgVer" href="./products/<?= esc($new_product['id'], 'url')?>">Ver producto/Editar</a>
                    <a class="btn col-4 bgDelete" href="./products/del/<?= esc($new_product['id'], 'url')?>">Eliminar</a>

                    <!--Falta modificar, que lo voy a meter dentro de ver producto, sería el siguiente enlance:
                    <a class="btn col-7.5 bg-success" href="./products/update<?= esc($new_product['nombreProducto'], 'url')?>">Ver producto/Editar</a>  -->

                </div>

                <!-- Agrega más columnas según sea necesario -->
            </div>
        <?php endforeach ?>
        
        <!--Ahora el enlace al producto en particular -->
        <!--
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
        -->
    </div>

    


<?php else: ?>

    <div class="container">
        <h3>No hay productos</h3>
        <a href="./products/new">CREATE PRODUCT</a>
    </div>

<?php endif ?>

</div>