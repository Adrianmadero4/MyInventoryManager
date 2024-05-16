<div class="container">


    <?php if (! empty($secciones) && is_array($secciones)): ?> <!-- OJO MUY IMPORTANTES QUE ESTA VARIABLE SECCIONES DEBE SER LA MISMA A LA QUE NOMBRAMOS EN LOS DATOS DEL CONTROLADOR  -->

        <?php foreach ($secciones as $sect): ?>
            <h2><?= esc($title) ?></h2>

            <a href="./secciones/new">Añadir Sección</a>

            <h4><?= esc($sect['nombre_seccion']) ?></h4>

            <div class="col-2">
                <img src="<?= esc($model->getImagenRuta($sect['id'])) ?>" alt="<?= esc('Imagen de: '.$sect['nombre_seccion']) ?>" width="100">
                </div>
        
            &nbsp;
            <a  class="btn btn-outline-secondary" href="./secciones/del/<?= esc($sect['id'], 'url') ?>">
                Eliminar Sección
                </a>
            
                &nbsp;
            <a class="btn btn-warning" href="./secciones/update/<?= esc($sect['id'], 'url') ?>">
                Actualizar Sección
                </a>
            </p>
            <br>
        <?php endforeach ?>

    <?php else: ?>

        <h3>No hay secciones creadas</h3>

        <p>Crea una parte del hogar y empieza a controlar todos tus productos!!.</p>
        <a href="<?= base_url('secciones/new') ?>">Añadir Sección</a>


    <?php endif ?>

</div>