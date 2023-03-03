<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    session_start();
    ?>
</head>
<body>
   <label for="aumentarnumero"><a href="./session.php?cont=1" name="aumentarnumero">Aumentar el valor de la session en 1</a></label></br>

   <label for="aumentarnumero"><a href="./session.php?cont=0" name="disminuirnumero">Disminuir la session en 1</a></label></br>
   
   <label for="resultado">El valor de la session es:<?=$_SESSION["numero"]?></label>
</body>
</html>