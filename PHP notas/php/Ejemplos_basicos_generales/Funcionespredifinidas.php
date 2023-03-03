<?php 

//Debuggear
$nombre = "Sebas"."</br>";
var_dump($nombre);

//Date ->Fechas
echo date('d-m-y')."</br>";

//Matematicas
//* sqrt ->Raiz Cuadrada
echo "Raiz cuadrada de 20:".sqrt(20)."</br>";

//rand -> Numero aleatorio
echo "Numero aleatorio entre 10 y 50:".rand(10,50)."</br>";

// pi ->Numero Pi
echo "El numero de pi es:".pi()."</br>";

// round ->Redondear
echo "Redondear:".round(4.894220, 1);

//Gettype -> ayuda a ver el tipo de variable en cuestion.
$nombre = "Sebastian </br>";
echo gettype($nombre);

//is_xxx -> Comprobar si una variable es de cierto tipo, no muestra el mensaje, solo comprueba.
$numero = "4.89";
  if(is_string($nombre)){
      echo "La variable nombre es un string.";
  }

// isset -> Comprueba si una variable existe en el programa. Si existe devuelve true, si no false.
echo isset($numero8);
echo "</br>";

//empty -> comprueba si una varibale existe - esta vacia - tiene un valor - si es nullo - si es false o true.
// Si variable esta vacia o null es false, sino esta vacia devuelve true
$texto = "h";
if(empty($texto)){
    echo "La variable esta vacia.";
} else {
    echo "La variable tiene contenido.";
}
echo "</br>";
//trim -> elemina los espacios que estan delante y por detras en la frase.
$frase = "  Hola Mundo  ";
var_dump(trim($frase));
echo "</br>";

// unset -> Elimina la variable en particular del codigo.
$year = 2021;
unset($year);

if(isset($year)){
  echo   "la variable year existe";
} else {
    echo "la variable year no existe"; 
}

//strlen -> cuenta los caracteres de una cadena.
$cadena = "12345";
echo strlen($cadena);
echo "</br>";

//strpos -> Sirve para validar si un caracter se encuentra en una variable.
$mail = "123@gmail.com";
$mail1 = strpos($mail, "@");
if(!empty($mail1)){
    echo "Has colocado correctamente el correo :)";
} else{
    echo "Por favor volver a colocar el correco.";
}
echo "</br>";

//str_replace -> Sirve para remplazar un valor en una variable.
$vida = "La vida es bella";
echo str_replace("vida", "moto", $vida);
echo "</br>";

// strtolower -> Convertir una frase en mayusculas.
// strtoupper -> Convertir una frase a mayusculas.
echo strtolower($frase);
echo "</br>";
echo strtoupper($frase);

include("../arrays/arrays.php");
//Count -> Ayuda a definir cuantos elementos hay en una variable, un ejemplo podria ser un array.
echo count($peliculas);
?>