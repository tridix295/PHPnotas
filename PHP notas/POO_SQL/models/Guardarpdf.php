<?php 
class PDF{
    private $plantilla;

    public function setPlantilla($Datos){
       $plantilla_html = '<table class="tabla"><tr>
    <th scope="row">Id</th>
    <th>ID Grupo</th>
    <th>Jefe</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cargo</th>
    <th>Sueldo</th>
    <th>Fecha</th>
    </tr>';
    foreach($Datos as $result){
       $plantilla_html .= 
        "<tr>
            <td>".$result['id']."</td>
            <td>".$result['grupo_id']."</td>
            <td>".$result['jefe']."</td>
            <td>".$result['nombre']."</td>
            <td>".$result['apellidos']."</td>
            <td>".$result['cargo']."</td>
            <td>".$result['sueldo']."</td>
            <td>".$result['fecha']."</td>
        </tr>";
        }
        $plantilla_html .= "</table>";

        $this->plantilla = $plantilla_html;
    }

    public function getPlantilla(){
        return $this->plantilla;
    }
    
}

?>