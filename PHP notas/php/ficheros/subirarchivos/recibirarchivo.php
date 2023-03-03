<?php 

//$_FILES => Es un array asociativo que recibi los archivos enviados. Tener presente que si se desea aumentar el tamaño
//de envio se debe configurar en la raiz del servidor:
// /php.ini => upload_max_filesize = $tamaño -Cantidad de informacion enviada por post
// /php.ini => post_max_size = $tamaño --Cantidad de informacion enviada por post

ini_set("display_errors",1);
ini_set('display_startup_errors', 1);
$error = (error_reporting(E_ALL));
$archivo = $_FILES["archivo"];
$nombre = $archivo["name"];
$tipo = $archivo["type"];
$estado = null;

if($tipo != "application/pdf"){
        header("Location: ./subirarchivos.php?estado=$tipo&$error");
}else{
    if(!is_dir('documentos')){
        mkdir("documentos", 0777) or error_reporting(E_ALL);
        move_uploaded_file($archivo["tmp_name"], "documentos/".$nombre);
    } else{
        move_uploaded_file($archivo["tmp_name"], "documentos/".$nombre);
    }
    $estado = "ok";
    header("Location: ./subirarchivos.php?estado=$estado");
}

?>