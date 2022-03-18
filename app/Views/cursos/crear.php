<?=$cabecera; ?>

Formulario para crear

<form method="POST" action="<?=site_url('/guardar') ?>" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input id="nombre" class="form-control" type="text" name="nombre">
    </div>
    <div class="form-group">
        <label for="imagen">Imagen:</label>
        <input id="imagen" class="form-control-file" type="file" name="imagen">
    </div>
    <button class="btn btn-primary" type="submit">Guardar</button>
</form>
<?=$pie; ?>