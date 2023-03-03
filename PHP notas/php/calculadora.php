
    <?php 
        $resultado = false;
        if(isset($_POST["n1"]) && isset($_POST["n2"])){


             $numero1=($_POST["n1"]);
             $numero2=($_POST["n2"]);

             if(isset($_POST["sumar"])){
                $resultado = $numero1 + $numero2;
             }

             if(isset($_POST["restar"])){
                $resultado = $numero1 - $numero2;
            }

            if(isset($_POST["multiplicar"])){
                $resultado = $numero1 * $numero2;
            }

            if(isset($_POST["dividir"])){
                $resultado = $numero1 / $numero2;
            }
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
</strong><label style='color:blue' name='resultado'>Por favor ingrese dos numeros en los campos para sumar</label><strong></br>

    <form action="" method="post">
    
    <label for="n1">Numero 1</label><br/>
    <input type="number" name="n1" required="required"><br/>

    <label for="n2">Numero 2</label><br/>
    <input type="number" name="n2" required="required"><br/><br/>

    <input type="submit" value="SUMAR" name="sumar"/>
    <input type="submit" value="RESTAR" name="restar"/>
    <input type="submit" value="MULTIPLICAR" name="multiplicar"/>
    <input type="submit" value="DIVIDIR" name="dividir"><br/></br>
    </form>
     
    <strong><label for="resultado"style="color:blue"> El resultado es:</label></strong><br/>
    <input type="text" name="resultado" <?php if($resultado != false): echo "value='$resultado'"; endif; ?> disabled>
</body>
</html>
