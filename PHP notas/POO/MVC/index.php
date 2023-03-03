<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Este es el index</h1><br>

    <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "/home/sebastian/Documentos/htdocs/practicas/POO/MVC/views/autoloads/autoload.php";

    if(isset($_GET["controller"])){
        //Iniciamos el controllador
       $class_name = Autocargado($_GET["controller"]."Controllers");
       // $name_class = $_GET["controller"]."Controllers";
       $controller = new $class_name();
        
        if(class_exists($class_name)){
        //Ejecutamos la accion
        if(isset($_GET["accion"]) && method_exists($controller,($_GET["accion"]))){
            $accion_usuario = $_GET["accion"];
            $controller->$accion_usuario();
        }
    }else{
            print "La pagina no existe";
        }
    }else{
        print "La pagina no existe :(";
    }

?>
</body>
</html>