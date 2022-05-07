<?=$cabecera; //esto equivale a escribir echo $cabecera ?>

        <?php
       // print_r($cursos);
        ?>
    <a href="<?=base_url('crear') ?>">Crear un Libro</a>
    <h2>Listado de cursos</h2>
    <br>
        <table class="table table-dark">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Acciones</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso): ?>
                <tr>
                    <td><?=$curso['id'];?></td>
                    <td>
                    <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$curso['imagen']; ?>" width="100" alt="">
                    </td>
                    <td><?=$curso['nombre'];?></td>
                    <td>Editar/Borrar</td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        <?=$pie; //imprimimos el pie ?>