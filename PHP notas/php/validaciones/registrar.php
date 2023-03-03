<?php


//Verificar si los datos obtenidos son correctos
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['mail']) && !empty($_POST['contraseña'])){
    $nombre = ($_POST['nombre']);
    $apellido = ($_POST['apellido']);
    $email = ($_POST['mail']);
    $contraseña = ($_POST['contraseña']);
    $error = "ok";

    //Validar nombre  
    if(!is_string($nombre) || !preg_match("/[A-Za-z ]+/",$nombre)){
        $error = $nombre;
    }

    if(!is_string($apellido) || !preg_match("/[A-Za-z ]+/",$apellido)){
        $error = $apellido;
    }

    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = $email;
    }

    if(empty($contraseña) && strlen($contraseña >= 8)){
        $error = $contraseña;
    }
    
}else{
    $error = "No hay datos";
}

if($error != 'ok'){
    header("Location:index.php?estado=$error");
}else{
    header("Location:index.php?estado=$error");
}


var_dump($_POST)
?>