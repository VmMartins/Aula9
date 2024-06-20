<?php
$n = $_GET['N1'];
$impar;

//{for($i = 0; $i <= $n; $i++){
// $impar = (2*$i + 1);
// echo"{$impar}\n";}
//
$cont = 0;

    while($cont < $n){
        $impar = (2*$cont + 1);
        echo"{$impar}\n";
        $cont++;

}


?>