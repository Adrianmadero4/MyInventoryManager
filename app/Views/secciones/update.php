<!--<h2><?//= esc($sections) ?></h2>-->
 
<a href="<?= base_url('/secciones')?>">Volver al listado</a>
<br><br><br>
 
<?php if (! empty($sections) && is_array($sections)):?>
    <?php //aqui nos sacaría el error?>

    <form action="<?= base_url('secciones/update/updated/') .($sections['id']) ?>"  method="post">
        <?= csrf_field() ?>
 
        <label for="nombre_seccion">Nombre de la Maravilla</label>
        <input type="input" name="nombre_seccion" value="<?= esc ($sections['nombre_seccion']) ?>"> <?//nombre_seccion del set value: campo de la BBDD?>
        <?/*set value mantiene los valores que teníamos.*/?>
        <br>

        <!--<label for="localizacion">Ubicación de la maravilla</label>
        <input type="input" name="localizacion" value="<?//= esc ($sections['location']) ?>">
        <br><br>-->

        <input type="submit" name="submit" value="Update section">
    </form>
 
<?php endif ?>