<?php 
/**
 * Escribir un programa con PHP que añada valores a una raíz mientras que su longitud se menor a 120
 */

for($i = 0; $i < 120; $i++){
    $contador[] = rand(0,200); 
    echo $contador[$i]."</br>";
}
echo "El numero de elementos en el array son de:".count($contador);
?>