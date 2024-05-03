<div class="container">
    <h2><?= esc('Producto: '.$products['nombreProducto'])?></h2>
    <p><?= esc('Descripción: '.$products['descripcion'])?></p>
    <p><?= esc('Hay: '.$products['stock'])?></p>
    <p><?= esc('Está guardado en: '.$products['guardado_en'])?></p>
    <p><?= esc('Precio de compra: '.$products['precio_compra'])?></p>
    <p><?= esc('Precio de venta: '.$products['precio_venta'])?></p>
    <p><?= esc('Fecha de compra: '.$products['fecha_compra'])?></p>
    <p><?= esc('Fecha de venta: '.$products['fecha_venta'])?></p>
    <p><?= esc('Imagen: : '.$products['imagen'])?></p>
    <p><?= esc('Documentos: '.$products['documentos'])?></p>
</div>