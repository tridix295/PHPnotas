<?php 
//Una interfaz sirve para definir que metodos y en que orden estaran en una clase.
//La clase que herede la interfaz debe si o si definir todos los metodos que estan establecidos en la interfaz
//Si un solo metodo de la interfaz no se coloca la clase va a fallar.

use function PHPSTORM_META\elementType;

interface Auto{
    public function encender();
    public function apagar();
}

interface Gasolina extends Auto{
    public function llenarTanque($cantidadGasolina);
    public function vaciarTanque();
}

class Automovil implements Gasolina{
    private $estado;
    private $tanque;

    public function __construct()
    {
        $this->estado = false;
        $this->tanque = 0;
    }

    public function estado(){
        if($this->estado){
            print "el auto esta encendido y tiene:".$this->tanque." litros de galosina.";
        }else{
            print "El auto esta apagado";
        }
    }
    public function encender(){
        if($this->estado){
            print "El auto ya esta encendido <br/>";
        }else{
            if($this->tanque <=0){
            print "El auto no tiene gasolina <br/>";
        }else{
            $this->estado = true;
            print "Auto encendido <br/>";
        }
        }
    }
    public function apagar(){
        if($this->estado){
            print "Auto apagado <br/>";
            $this->estado = false;
        }
    }
    public function llenarTanque($cantidadGasolina){
        $this->tanque = $cantidadGasolina;
    }
    public function vaciarTanque(){
        $this->tanque = 0;
    }
    public function usar($km){
        if($this->estado){
            $reducir = $km / 3;
            $this->tanque = $this->tanque - $reducir;

            if($this->tanque <=0){
                $this->estado = false;
            }
        }else{
            print "El auto esta apagado y no se puede usar. <br/>";
        }
    }
}

$carro = new Automovil();
$carro->llenarTanque(100);
$carro->encender();
$carro->usar(350);
$carro->estado();

?>