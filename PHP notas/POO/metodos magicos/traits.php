<?php 
//Traits: Su funcion es compartir informacion, como metodos y propiedades sin la necesidad de que este
//sea heredado.

use Coche as GlobalCoche;
use Utilidades as GlobalUtilidades;

trait Utilidades{
    public function mosrarIinformacion(){
        print "El nombre es: ".$this->nombre;
    }
}

class Coche{
    public $nombre = "Zedan";

    use GlobalUtilidades;
}

class Persona{
    public $nombre = "Fabian";

    use GlobalUtilidades;
}

$carro = new Coche();
echo $carro->mosrarIinformacion()."<br/>";
$persona = new Persona();
echo $persona->mosrarIinformacion();

?>