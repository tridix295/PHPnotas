<table class="tabla"><tr>
    <th scope="row">Id</th>
    <th>ID Grupo</th>
    <th>Jefe</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cargo</th>
    <th>Sueldo</th>
    <th>Fecha</th>
    </tr>
<?php foreach($array_Vendedor as $result):?>
        <tr>
            <td><?=$result['id']?></td>
            <td><?=$result['grupo_id']?></td>
            <td><?=$result['jefe']?></td>
            <td><?=$result['nombre']?></td>
            <td><?=$result['apellidos']?></td>
            <td><?=$result['cargo']?></td>
            <td><?=$result['sueldo']?></td>
            <td><?=$result['fecha']?></td>
        </tr>
<?php endforeach;?>
</table>
