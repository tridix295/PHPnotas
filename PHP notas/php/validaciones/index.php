<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>body{color:black}</style>

    <?php 
       if(isset($_GET['estado'])){
           $error = $_GET['estado'];

        if($error != "ok"){
               echo "<label><stront style='color:red'>Porfavor introducir correctamente los campos en la casilla $error</strong></label>";
           }
           if($error== "ok"){
            echo "<label><stront style='color:blue'>Registro exitoso</strong></label>";
           }
       }else{
           echo "<label><stront style='color:blue'>Por favor llenar los datos en los campos correspondientes</strong></label>";
       }
    
    
    ?>
</head>
<body>
<!--En html existen varias etiquetas que permiten realizar una serie de validaiones desde el cliente.
    *pattern => valida que los datos establecidos dentro [A-Z]+ sean los correctos, es decir ingresar solamente letras 
     minusculas y mayusculas y un numeor indefinido de veces
    
    <label for="mail">Mail</label>
    <input type="email" name="mail" required="required">
                       | |
                        V
    Esto encapsula los elementos en uno solo
-->

<!--Registro-->
<form action="registrar.php" method="POST">
     <label for="nombre">Nombre</label></br>
     <input type="text" name="nombre" pattern="[a-zA-Z ]+" required="required"></br>

     <label for="apellido">Apellido</label></br>
     <input type="text" name="apellido" pattern="[A-Za-z ]+" required="required"></br>

     <label for="mail">Mail</label></br>
     <input type="email" name="mail" required="required"></br>

     <label for="contraseña">Contraseña</label></br>
     <input type="text" name="contraseña" required="required" minlength="8"></br>

 

     <input type="submit" value="Registrar">
</form>
 
</body>
</html>