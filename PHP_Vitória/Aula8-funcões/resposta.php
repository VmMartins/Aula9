<?php
$n1 = $_GET['n1'];
$n2= $_GET['n2'];

function soma($n1, $n2){
    $res = $n1 +$n2;
    echo "O resultado da soma é {$res}";
} 
soma($n1,$n2);

?>