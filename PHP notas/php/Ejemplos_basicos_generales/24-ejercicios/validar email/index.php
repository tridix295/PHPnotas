<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Email</title>
</head>
<body>
<?php

 if(!empty($_GET["estado"])){
        $estado= ($_GET["estado"]);
        echo "<stronger><label style='color:blue'>$estado</label></stronger>";} else{
        $estado= ($_GET["estado"]);
        echo "<stronger><label style='color:red'>$estado</label></stronger>";
        }
?>
    <form action="validaremail.php" method="POST">
    
    <label for="mail">Mail</label></br>
    <input type="email" name="email" required="required"></br>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>