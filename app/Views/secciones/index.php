<div class="container">
<h2 class="mb-2" ><?= esc($title) ?></h2>


    <?php if (! empty($secciones) && is_array($secciones)): ?> <!-- OJO MUY IMPORTANTES QUE ESTA VARIABLE SECCIONES DEBE SER LA MISMA A LA QUE NOMBRAMOS EN LOS DATOS DEL CONTROLADOR  -->
        <a class="btn col-7.5 bgLim text-light mb-2" href="<?= base_url('secciones/new') ?>">Añadir Sección</a>

        <?php foreach ($secciones as $sect): ?>


            <h4><?= esc($sect['nombre_seccion']) ?></h4>

            <div class="col-2 mb-4">
                <img src="<?= esc($model->getImagenRuta($sect['id'])) ?>" alt="<?= esc('Imagen de: '.$sect['nombre_seccion']) ?>" width="100">
                </div>
        
            &nbsp;
            <a  class="btn bg-secondary text-light" href="./secciones/update/<?= esc($sect['id'], 'url') ?>">
                Actualizar Sección
                </a>
            
                &nbsp;
            <a class="btn bgDelete text-light" href="./secciones/del/<?= esc($sect['id'], 'url') ?>">
                Eliminar Sección
                </a>
            </p>
            <br>
        <?php endforeach ?>

    <?php else: ?>

        <h3>No hay secciones creadas</h3>

        <p>Crea una parte del hogar y empieza a controlar todos tus productos!!.</p>
        <a class="btn col-7.5 bgLim text-light mb-4" href="<?= base_url('secciones/new') ?>">Añadir Sección</a>



    <?php endif ?>

</div>