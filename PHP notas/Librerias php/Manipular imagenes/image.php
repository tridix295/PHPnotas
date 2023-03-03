<?php

use Spipu\Html2Pdf\Html2Pdf;

require_once "/home/sebastian/Documentos/htdocs/practicas/vendor/autoload.php";

$foto_original = "Librerias php/Manipular imagenes/Mifoto.jpg";
$guardar = "Guardar_url";

$thumb = new PHPThumb\GB($foto_original);
?>