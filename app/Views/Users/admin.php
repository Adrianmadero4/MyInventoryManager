<div class="container">
    
    <?php $session = session()?>
    <?php if (! empty($user)): ?> <!--$User es un array que contiene los usuarios que hemos obtenido-->
    <h3><?= "Bienvenid@ ". $session->get('user')?></h3>
    <p>Aquí encontrarás tus secciones del hogar así como un breve listado con 4 productos, pero con la posibilidad de acceder a todos ellos</p>
    <div class="container mt-4 mb-4">
        <h2 class="text-center">Secciones y productos</h2>
        <div class="row mt-4">
            <?php foreach ($secciones as $seccion): ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mt-3" style="max-width: 400px;">
                        <img src="<?= esc((new \App\Models\SeccionesModel())->getImagenRuta($seccion['id'])) ?>" class="card-img-top" alt="<?= esc($seccion['nombre_seccion']) ?>">

                        <div class="card-body text-center">
                            <h4 class="card-title"><?= esc($seccion['nombre_seccion']) ?></h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php $count = 0; ?>
                            <?php foreach ($products as $product): ?>
                                <?php if ($product['id_seccion'] == $seccion['id'] && $count < 4): ?>
                                    <li class="list-group-item">
                                        <img src="<?= esc((new \App\Models\ProductModel())->getImagenRuta($product['id'])) ?>" alt="<?= esc($product['nombreProducto']) ?>" style="max-width: 50px;" class="me-2">
                                        <?= esc($product['nombreProducto']) ?>
                                    </li>
                                    <?php $count++; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                        <div class="card-body">
                            <a href="<?= base_url('products')?>" class="card-link">Ver la lista completa</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php else: ?>

    <h3>No Users</h3>

    <p>Unable to find information for you.</p>

    <?php endif ?>

</div>




