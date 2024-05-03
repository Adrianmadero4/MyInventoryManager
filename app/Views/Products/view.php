<div class="container">
    <a class="" href="<?php echo base_url('/products'); ?>">Volver al listado</a>

    <h2><?= esc('Producto: '.$product['nombreProducto'])?></h2>
    <p><?= esc('Descripción: '.$product['descripcion'])?></p>
    <p><?= esc('Hay: '.$product['stock'])?></p>
    <p><?= esc('Está guardado en: '.$product['guardado_en'])?></p>
    <p><?= esc('Precio de compra: '.$product['precio_compra'])?></p>
    <p><?= esc('Precio de venta: '.$product['precio_venta'])?></p>
    <p><?= esc('Fecha de compra: '.$product['fecha_compra'])?></p>
    <p><?= esc('Fecha de venta: '.$product['fecha_venta'])?></p>
    <p><?= esc('Imagen: : '.$product['imagen'])?></p>
    <p><?= esc('Documentos: '.$product['documentos'])?></p>
</div>
