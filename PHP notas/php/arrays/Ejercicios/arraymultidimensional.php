<?php 

$tabla = array(
   "accion" => array("GTV","COD","PUGB"),
   "aventura" => array("Assing creed","mundoaventura","zelda"),
   "deportes" => array("PES","FIFA","FUTBALL")
);


$indice = array_keys($tabla);

            

?>
<table border ="1">
    <tr>
    <?php foreach($indice as $indice):?>
    
       <th><?=$indice?></th>
       <?php endforeach;?>
    </tr>
    
   
    <?php for($i = 0; $i < count($tabla); $i++){
      echo " <tr><td>".$tabla['accion'][$i]."</td>".
      "<td>".$tabla['aventura'][$i]."</td>".
      "<td>".$tabla['deportes'][$i]."</td></tr>"; 
    }
    ?>
    
</table>";