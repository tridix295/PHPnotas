<?php 
//Se pasa el parametro recibido por POST para validar si fue ingresado correctamente y devuelve el estado segun el caso
function validaremail($email){
    $status = "!Fail";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && is_string($email)){
        $status = "Email ingresado correctamente";
    }
  return $status;
}

//Se comprueba si el valor recibido por POST existe y llama a la funcion segun el caso
if(!isset($_POST["email"])){
    $estado = "No se resivieron datos";
} else {
    if(empty($_POST["email"])){
        $estado = "Campo sin datos";
    } else{
        $email = ($_POST["email"]);
       $estado = validaremail($email);
    }
}

//Se redirecciona al inicio con el estado de la ejecucion.  
header("Location: ./index.php?estado=$estado");
?>