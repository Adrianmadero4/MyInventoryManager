<div class="container">
    <a class="btn col-7.5 bgLim text-light" href="<?php echo base_url('/products'); ?>">Volver al listado</a>
    <a class="btn col-7.5 bg-success" href="<?= base_url("products/update/{$product['id']}") ?>">Editar producto</a>


    <h2 class="text-center mb-2"><?= esc('Producto: '.$product['nombreProducto'])?></h2>

    <div class="row">
        <div class="col-md-6">
            <p><?= esc('Descripción: '.$product['descripcion'])?></p>
            <p><?= esc('Hay: '.$product['stock'])?></p>
            <p><?= esc('Está guardado en: '.$product['guardado_en'])?></p>
            <!-- Precio de compra -->
            <p><?= ($product['precio_compra'] != '0.00') ? 'Precio de compra: '.$product['precio_compra'] : 'Precio de compra: -' ?></p>
            <!-- Precio de venta -->
            <p><?= ($product['precio_venta'] != '0.00') ? 'Precio de venta: '.$product['precio_venta'] : 'Precio de venta: -' ?></p>
            <!-- Fecha de compra -->
            <p><?= ($product['fecha_compra'] != '0000-00-00') ? 'Fecha de compra: '.date('d/m/Y', strtotime($product['fecha_compra'])) : 'Fecha de compra: -' ?></p>
            <!-- Fecha de venta -->
            <p><?= ($product['fecha_venta'] != '0000-00-00') ? 'Fecha de venta: '.date('d/m/Y', strtotime($product['fecha_venta'])) : 'Fecha de venta: -' ?></p>
            
            <?php if (!empty($product['documentos'])): ?>
                <p>Documentos: <a href="<?= base_url('public/documents/' . $product['documentos']) ?>" target="_blank"><?= esc($product['documentos']) ?></a></p>
            <?php else: ?>
                <p>Documentos: No disponible</p>
            <?php endif; ?>        
        </div>
        <div class="col-md-6 mt-4">
            <img src="<?= esc($model->getImagenRuta($product['id'])) ?>" alt="<?= esc('Imagen de: '.$product['nombreProducto']) ?>">
        </div>
    </div>
</div>
