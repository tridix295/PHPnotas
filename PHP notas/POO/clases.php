<?php 
//Las clase se considera como un molde/plantilla con el cual se puede crear objetos diferente.
/*
*Prodiedade/atributos => variables: Se le conoce las caracteristicas de un objeto.
*Metodos => funciones: Se le conoce como las acciones que un objeto en concreto, en la cual se pueden añadir o cambiar las propiedades de la clase
*/

//Clase choche => Molde de un coche

use Coche as GlobalCoche;

class Coche{
    //Atributos/Propiedades => variables
    public $color;
    public $modelo;
    public $marca;
    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color,$modelo,$marca,$velocidad,$caballaje,$plazas)
    {
        //Los atributos dentro del constructor seran los valores por defecto, ya que la funcion
        //es la primera en ejecutarse.
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    //Metodos => funciones: Son acciones que puede realizar el objeto en cuestion.
    //cuando se quiere obtener un valor o cambiarlo se utiliza el get => obtener x valor y set => actualizar.
    public function getColor(){
        //El this sirve para acceder a los valores de las propiedades.
        //Para este caso es => Busca en esta clase la propiedad que se desee.
        return $this->color;
    }

    public function setColor($color){
		$this->color = $color;
	}
    
    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
       return $this->velocidad;
    }
}

$coche = new Coche("amarillo","renault","clio","1200","50","5");
var_dump($coche);

//Cambiar el valor de un propiedad del objeto
$coche->setColor("verde");
//Mostrar/Obtener una propiedad del objeto.
echo "El color del coche es: ".$coche->getColor();

//Crear un nuevo objeto
//El nuevo objeto sera independiente del primero, por los que sus valores no se veran afectados.
$coche2 = new Coche();

//Cambiar el valor de un propiedad del objeto
$coche->setColor("azul");
//Mostrar/Obtener una propiedad del objeto.
echo "</br>El color del coche 2 es: ".$coche->getColor();

//La clase al estar interactuando con el objeto no se ve afectada por estos. Su valores iniciales siguen siendo los mismos.
//Los ficheros que contienen una clase se debe llamar como estas.
?>

