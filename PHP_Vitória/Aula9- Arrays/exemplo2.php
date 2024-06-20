<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <!--
    2. Faça um procedimento que recebe 3 valores inteiros por parâmetro e retorna-os ordenados em ordem crescente.
-->

    


</body>
<?php


function ordenarValores($x, $y, $z) {
    If($x < $y && $x < $z){
        echo "{$x}<br>";
        if($y < $z){
            echo"{$y}<br>{$z}";
        }else{
            echo"{$z}<br>{$y}";
        }
    }elseif($y < $x && $y < $z){
        echo"{$y}<br>";
        if($x < $z){
            echo"{$x}<br>{$z}";
        }else{
            echo"{$z}<br>{$x}";
        }
    }else{
        echo"{$z}<br>";
        if($x < $y){
            echo "{$x}<br>{$y}";
        }else{
            echo "{$y}<br>{$x}";
        }
    }
}
    ordenarValores(100, 69, 85);
?>