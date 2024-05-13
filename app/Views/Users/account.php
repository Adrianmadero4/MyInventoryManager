<!-- Vista account.php 
<div class="container">
    <h2>Bienvenido, <?= esc($user['username']) ?></h2>
    <h3>Secciones:</h3>
    <ul>
        <?php foreach ($secciones as $seccion): ?>
            <li><?= esc($seccion['nombre_seccion']) ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Productos:</h3>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= esc($product['nombre']) ?></td>
                    <td><?= esc($product['descripcion']) ?></td>
                    <td><?= esc($product['precio']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
-->