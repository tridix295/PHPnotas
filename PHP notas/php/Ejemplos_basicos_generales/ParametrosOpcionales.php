<?php

function calculadora($n1, $n2, $n3 = false) {

     $suma = $n1 + $n2;
     $multiplicacion = $n1 * $n2;
     $resta = $n1 - $n2;
     $division = $n1 / $n2;
    
     if($n3 == 5){
        echo "<h1>BIEN ECHO :-)</h1> <br/>";
      }
     echo"$suma<br/>";
     echo"$multiplicacion<br/>";
     echo"$resta<br/>";
     echo"$division<br/>";
     echo"<hr/>";

}

for($i = 1; $i < 10; $i++){
   
     $n1 = $i;
     $n2 += $i;
     $n3 = null;

     if($i == 5){
          $n3 = $i;
     }
     calculadora($n1,$n2,$n3);
}

?>

