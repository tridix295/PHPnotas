<?php 
require_once "/home/sebastian/Documentos/htdocs/practicas/vendor/autoload.php";
// inhibit DOMPDF's auto-loader
define('DOMPDF_ENABLE_AUTOLOAD', false);

use Spipu\Html2Pdf\Html2Pdf;
$html = '<table class="tabla"><tr>
<th scope="row">Id</th>
<th>ID Grupo</th>
<th>Jefe</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Cargo</th>
<th>Sueldo</th>
<th>Fecha</th>
</tr></table>';
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output();
?>