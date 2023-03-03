<?php
require_once "/home/sebastian/Documentos/htdocs/practicas/POO_SQL/models/Guardarpdf.php";
require_once "/home/sebastian/Documentos/htdocs/practicas/POO_SQL/models/Vendedores.php";
use Dompdf\Dompdf;

    class VendedoresControllers extends Vendedores {
        public function getDatos(){
            $datos = new Vendedores();
            //$array_Vendedor = $datos->getVendedores();
           // $plantilla = new PDF();
            $array_Vendedor = $datos->getVendedores();
            //$plantilla->getPlantilla();
            require_once $_SERVER["DOCUMENT_ROOT"]."/practicas/POO_SQL/views/usuarios/vendedor/vendendorlist.php";
            $html = ob_get_clean();
         //   $html_to_pdf = new Dompdf();
          //  $html_to_pdf->output();
           // $pdf = new PDF();
           // $pdf->setPlantilla($array_Vendedor);
           // $html = $pdf->getPlantilla();
            //if(isset($html) && !empty($html)){
  
           // }
           //$htmlpdf->output("Document.pdf");
            
        }
    }

?>