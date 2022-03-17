<?=$cabecera; //esto equivale a escribir echo $cabecera ?>

        <?php
       // print_r($cursos);
        ?>
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
                    <td><?=$curso['imagen'];?></td>
                    <td><?=$curso['nombre'];?></td>
                    <td>Editar/Borrar</td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        <?=$pie; //imprimimos el pie ?>