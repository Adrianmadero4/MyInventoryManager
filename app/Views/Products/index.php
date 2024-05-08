<div class="container">
<link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

<h2><?= esc($title) ?></h2> <!--Este title es el de la función index del controller-->
<!-- -->
<a class="btn col-7.5 bgLim" href="./products/new">Añadir Producto</a>

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
            <!-- <h4><?= esc($new_product['id_seccion']) ?> Este id_seccion es el campo seccion del select, si no funciona, probar con secciones o secciones.id</h4> -->

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
                    <img src="<?= base_url('images/imgPrivate'.$new_product["imagen"])?>" alt="<?= esc('Imagen de: '.$new_product['nombreProducto']) ?>" width="150">
                    <!-- <p><?= esc($new_product['imagen']) ?></p> -->
                </div>
                <div class="col-3">
                    <!-- <button class="col-7.5 bg-light">Ver producto/Editar</button> 
                    <button class="col-4 bg-light">Eliminar</button> -->
                    <a class="btn col-7.5 bgVer" href="./products/<?= esc($new_product['id'], 'url')?>">Ver producto/Editar</a>
                    <a class="btn col-4 bgDelete" href="./products/del/<?= esc($new_product['id'], 'url')?>">Eliminar</a>

                    <!--Falta modificar, que lo voy a meter dentro de ver producto, sería el siguiente enlance: -->
                    <a class="btn col-7.5 bg-success" href="./products/update/<?= esc($new_product['id'], 'url')?>">Editar</a>  

                </div>

                <!-- Agrega más columnas según sea necesario -->
            </div>
            
        <?php endforeach ?>
        <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
            <th>Producto</th>
            <th>Title</th>
            <th>Tienes</th>
            <th>Guardado en</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
                <div class="d-flex align-items-center">
                <img
                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                    alt=""
                    style="width: 45px; height: 45px"
                    class="rounded-circle"
                    />
                <div class="ms-3">
                    <p class="fw-bold mb-1"><?= esc($new_product['nombreProducto']) ?></p> <!--['Nombre del campo de la BBDD'] -->
                    <p class="text-muted mb-0"><?= esc($new_product['descripcion']) ?></p>
                </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">Software engineer</p>
                <p class="text-muted mb-0">IT department</p>
            </td>
            <td>
                <span class="badge badge-success rounded-pill d-inline">Active</span>
                <p><?= esc($new_product['stock']) ?></p>

            </td>
            <td><p><?= esc($new_product['guardado_en']) ?></p>
            </td>
            <td>
                <button
                    type="button"
                    class="btn btn-link btn-rounded btn-sm fw-bold"
                    data-mdb-ripple-color="dark"
                    >
                    <a class="btn col-7.5 " href="./products/<?= esc($new_product['id'], 'url')?>">Ver producto/Editar</a>

                    <!--Edit-->
                </button>
            </td>
            </tr>
        </tbody>
    </table>

        
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