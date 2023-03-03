<?php 
$n = array(
    'n1' => '0',
    'n2' => '2',
    'n3' => '1'
);

switch(++$n){
 case ($n['n1'] == 0):
    echo "estas en var 1";
 break;

 case ($n['n2'] == 2):
    echo "estas en var 2";
 break;

 case ($n['n3'] == 1):
    echo "estas en var 3";
 break;
}
?>