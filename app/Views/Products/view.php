<div class="container">
    <a class="btn col-7.5 bgLim text-light" href="<?php echo base_url('/products'); ?>">Volver al listado</a>
    <a class="btn col-7.5 bg-success" href="<?= base_url("products/update/{$product['id']}") ?>">Editar producto</a>


    <h2 class="text-center mb-2"><?= esc('Producto: '.$product['nombreProducto'])?></h2>

    <div class="row">
        <div class="col-md-6">
            <p><?= esc('Descripción: '.$product['descripcion'])?></p>
            <p><?= esc('Hay: '.$product['stock'])?></p>
            <p><?= esc('Está guardado en: '.$product['guardado_en'])?></p>
            <p><?= esc('Precio de compra: '.$product['precio_compra'])?></p>
            <p><?= esc('Precio de venta: '.$product['precio_venta'])?></p>
            <p><?= esc('Fecha de compra: '.date('d/m/Y', strtotime($product['fecha_compra'])))?></p>
            <p><?= isset($product['fecha_venta']) ? esc('Fecha de venta: '. date('d/m/Y', strtotime($product['fecha_venta']))) : 'Fecha de venta no disponible' ?></p>
            <p><?= esc('Documentos: '.$product['documentos'])?></p>
        </div>
        <div class="col-md-6 mt-4">
            <img src="<?= esc($model->getImagenRuta($product['id'])) ?>" alt="<?= esc('Imagen de: '.$product['nombreProducto']) ?>">
        </div>
    </div>
</div>
