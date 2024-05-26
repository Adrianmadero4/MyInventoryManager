<div class="container">
    <link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>

    <h2><?= esc($title) ?></h2>
    <a class="btn col-7.5 bgLim text-light mb-2" href="./products/new">Añadir Producto</a>

    <!-- El código de abajo permitirá filtrar por nombre de producto según el javascript del final de esta vista -->
    <input class="form-control mb-3" id="product-search" type="text" placeholder="Buscar productos...">

    <?php if (! empty($products) && is_array($products)): ?> 
        <div class="container mt-4 mb-4" id="product-list">
            <!-- Primera fila con background gris claro -->
            <div class="row bg-light text-center">
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
            </div>
            
            <?php foreach ($products as $new_product): ?>
                <div class="row align-items-center text-center border mb-2 product-item">
                    <div class="col-2">
                        <div class="d-flex justify-content-start align-items-center">
                            <img src="<?= esc($model->getImagenRuta($new_product['id'])) ?>" alt="" style="width: 80px; margin-right: 10px;">
                            <p class="product-name"><?= esc($new_product['nombreProducto']) ?></p>
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
                        <a class="btn col-7.5 bg-secondary text-light" href="./products/<?= esc($new_product['id'], 'url')?>">Ver producto/Editar</a>
                        <a class="btn col-4 bgDelete text-light" href="./products/del/<?= esc($new_product['id'], 'url')?>">Eliminar</a>
                    </div>
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

<!-- El siguiente script permite hacer un filtro de los productos a partir de la segunda letra escrita
al escribir algo en el buscador de productos -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('product-search');
        const productList = document.getElementById('product-list');
        const productItems = productList.getElementsByClassName('product-item');

        searchInput.addEventListener('keyup', function() { //Evento que se dispara cuando se suelta una tecla en el teclado después de haber sido presionada.
            const filter = searchInput.value.toLowerCase();
            Array.from(productItems).forEach(function(item) {
                const productName = item.querySelector('.product-name').textContent.toLowerCase();
                if (productName.includes(filter)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
