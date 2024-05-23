<div class="container">
    <link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

    <h2><?= esc($title) ?></h2> <!--Este title es el de la función index del controller-->
    <!-- -->
    <a class="btn col-7.5 bgLim text-light mb-2" href="./products/new">Añadir Producto</a>

    <?php if (! empty($products) && is_array($products)): ?> <!--Si el array no está vacío y se puede recorrer: -->

        <div class="container mt-4 mb-4">
            <!-- Primera fila con background gris claro -->
            <div class="row bg-light text-center">
                <!-- Columnas -->
                <div class="col-2">
                    <h6>Nombre del Producto</h6>
                </div>
                <div class="col-4">
                    <h6>Descripción</h6>
                </div>
                <div class="col-1">
                    <h6>Tienes</h6>
                </div>
                <div class="col-2">
                    <h6>Ubicado en la sección</h6>
                </div>
                

                <div class="col-3">
                    <h6>Acciones</h6>
                </div>
                <!-- Agrega más columnas según sea necesario -->
            </div>
            
            <?php foreach ($products as $new_product): ?> <!--Recorremos el array de productos y nos inventamos el new_product -->
                <!-- <h4><?= esc($new_product['id_seccion']) ?> Este id_seccion es el campo seccion del select, si no funciona, probar con secciones o secciones.id</h4> -->

                <!-- Segunda fila sin fondo -->
                <div class="row align-items-center text-center border mb-2">
                    <!-- Aquí puedes iterar sobre tus productos -->

                    <div class="col-2">
                        <!-- Contenedor con margen lateral -->
                        <div class="d-flex justify-content-start align-items-center">
                            <img src="<?= esc($model->getImagenRuta($new_product['id'])) ?>" alt="" style="width: 80px; margin-right: 10px;">
                            <p><?= esc($new_product['nombreProducto']) ?></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <p><?= esc($new_product['descripcion']) ?></p>
                    </div>
                    <div class="col-1">
                        <p><?= esc($new_product['stock']) ?></p>
                    </div>
                    <div class="col-2">
                        <p><?= esc($new_product['nombre_seccion']) ?></p>
                    </div>
                    <div class="col-3">
                        <!-- <button class="col-7.5 bg-light">Ver producto/Editar</button> 
                        <button class="col-4 bg-light">Eliminar</button> -->
                        <a class="btn col-7.5 bg-secondary text-light" href="./products/<?= esc($new_product['id'], 'url')?>">Ver producto/Editar</a>

                        
                        <!-- <a class="btn col-7.5 bgVer" href="./products/<?= esc($new_product['id'], 'url')?>">Ver producto/Editar</a>-->
                        <a class="btn col-4 bgDelete text-light" href="./products/del/<?= esc($new_product['id'], 'url')?>">Eliminar</a> 

                    </div>

                    <!-- Agrega más columnas según sea necesario -->
                </div>
            <?php endforeach ?>
        </div>

    <?php else: ?>

        <div class="container">
            <h3>No hay productos</h3>
            <p>Clique en el botón de arriba para crear un producto</p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="card mt-3" style="max-width: 1200px;">
                        <h4 class="card-title text-center">Ejemplo de productos</h4>
                        <img src="public/images/ImgProducts.png" class="card-img-top img-fluid" alt="Imagenes">
                        <div class="card-body text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <?php endif ?>

</div>