<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos al servidor</title>
</head>
<body>
    <center><h1>Subir archivos al servidor</h1></center>

    <form action="recibirarchivo.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="archivo"/>
    <input type="submit" value="Enviar"/></br> 
    </form>

    <?php
        if (isset($_GET["estado"])){
            $estado = $_GET["estado"];
              if($estado != "ok"){
                echo "<label for='estado'><strong style='color:red'>Error al subir el documento, verique el tipo de documento y o tamaño </br> Error:$estado</strong></label>";
                  }else{
                    echo "<label for='estado'><strong style='color:blue'>El archivo fue subido correctamente :)</strong></label></br>";
                    if($gestor = opendir("./documentos")){
                        while(false !== ($resultado = readdir($gestor))){
                            if($resultado != "." && $resultado != ".."){
                                echo "<iframe  src='./documentos/$resultado' with='200px'></iframe></br>";
                            }
                        }
                    }
                    
                }
            }
    ?>
</body>
</html>