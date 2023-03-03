<?php 
function Semaforo($n1,$n2,$n3){
    if($n1 == 1){
        return "El semaforo esta en: Rojo </br>";
    }

    else if($n2 == 10){
        return "El semaforo esta en: Amarillo </br>";
    }

    else if($n3 == 13){
        return "El semaforo esta en: Verde </br>";
    }

}


for($i = 0; $i <= 13; $i++){
   if($i == 1){
       $n1 = 1;
   }

   else if($i == 10){
       $n2 = 10;
   }

   else if($i == 13){
    $n3 = 13;
}
  
  echo  Semaforo($n1,$n2,$n3);
  $n1=0;$n2=0;$n3=0;
}

?>