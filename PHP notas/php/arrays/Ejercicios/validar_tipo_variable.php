<?php 
/*
*crear un script en PHP que tenga cuatro variables una de tipo Array otra de tipo string otra int 
y otra Pulianas y que imprima un mensaje según el tipo de variable que sea.
*/
$persona = array (
    "nombre" => "Sebastian",
    "apellido" => "Diaz",
    "sexo" => "Hombre"
);
$mensaje = "Hola, soy pablo :)";
$numero = 50;
$rojo = true;

for($i = 0; $i < 4; $i++){
    if($i == 0){
        if(is_array($persona)){
            echo "Es un array";
        }
    }

    else if($i == 1){
        if(is_string($mensaje)){
            echo "Es un string :I";
        }
    }

    else if($i == 2){
        if(is_integer($numero)){
            echo "Es un entero :)";
        }
    }

    else if($i == 3){
        if(is_bool($rojo)){
            echo "Es un boolean :)";
        }
    }
}
//gettype -> Tambien ayuda a validar el tipo de elemento de la variable.
echo gettype($persona);
?>