<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "/home/sebastian/Documentos/htdocs/practicas/POO/namespace/class.php/Persona.php";

use Persona\Persona;
use Persona\Categoria;
class Empleado{
    public $nombre;
    public $categoria;

    public function __construct(){
        $this->nombre = new Persona;
        $this->categoria = new Categoria;
    }
}

//class_exists->Comprueba si una clase existe o no
$clase = class_exists("Empleado");
if($clase){
    print "Si <br/>";
}else{
    print "no";
}
$principal = new Empleado();

//get_class_methods-> Obtiene todos los metodos existentes en el objeto instanciado
//Como es un array podemos hacer uso  de la funcion array_search
var_dump(get_class_methods($principal));
//var_dump($principal);
?>