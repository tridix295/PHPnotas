<?php
//mkdir => Esta funcion permite crear carpetas en el destino deseado, tambien es necesario que se le den los permisos correspondientes.
//is_dir => Comprueba si el nombre del elemento pertenece a una carpeta. Devuelve true si la carpeta existe, false si no.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
if(!is_dir("directorio2")){
    mkdir("directorio2", 0777);
    if(is_dir("directorio2")){
        echo "La carpeta se creo correctamente";
    }
}else{
    echo "Ya se encuentra una carpeta creada con ese nombre";
}*/

//Leer y mostrar los archivos dentro de la carpeta

if($gestor = opendir("./directorio2")){
    while(false !== ($resultado = readdir($gestor))){
        if($resultado != "." && $resultado != ".."){
            echo $resultado."</br>";
        }
    }
} else{
    echo "Error al mostrar los ficheros";
}

closedir("./directorio2")
?>