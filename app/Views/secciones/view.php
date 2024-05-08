<div class="container">
    <a class="btn col-7.5 bgLim text-light" href="<?php echo base_url('/products'); ?>">Volver al listado</a>
    <a class="btn col-7.5 bg-success" href="<?= base_url("products/update/{$product['id']}") ?>">Editar producto</a>


    <h2 class="text-center"><?= esc('Producto: '.$product['nombreProducto'])?></h2>

    <div class="row">
        <div class="col-md-6">
            <p><?= esc('Descripción: '.$product['descripcion'])?></p>
            <p><?= esc('Hay: '.$product['stock'])?></p>
            <p><?= esc('Está guardado en: '.$product['guardado_en'])?></p>
            <p><?= esc('Precio de compra: '.$product['precio_compra'])?></p>
            <p><?= esc('Precio de venta: '.$product['precio_venta'])?></p>
            <p><?= esc('Fecha de compra: '.$product['fecha_compra'])?></p>
            <p><?= esc('Fecha de venta: '.$product['fecha_venta'])?></p>
            <p><?= esc('Documentos: '.$product['documentos'])?></p>
        </div>
        <div class="col-md-6">
            <img src="<?= esc($product['imagen']) ?>" alt="<?= esc('Imagen de: '.$product['nombreProducto']) ?>">
        </div>
    </div>
</div>
