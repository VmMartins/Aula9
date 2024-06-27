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
    1. Escreva um procedimento que recebes 3 valores reais X, Y e Z e que verifique se esses valores podem ser os comprimentos dos lados de um triângulo e, neste caso, retornar qual o tipo de triângulo formado. Para que X, Y e Z formem um triângulo é necessário que a seguinte propriedade seja satisfeita: o comprimento de cada lado de um triângulo é menor do que a soma do comprimento dos outros dois lados. O procedimento deve identificar o tipo de triângulo formado observando as seguintes definições:

    Triângulo Equilátero: os comprimentos dos 3 lados são iguais.
    Triângulo Isósceles: os comprimentos de 2 lados são iguais.
    Triângulo Escaleno: os comprimentos dos 3 lados são diferentes
-->

    <form action="" method="get">
        <h1>Sistema para identificar triângulos!<h1>
                <h3>Insira as bases:<h3><br><br>
                        A: <input type="number" name = "NumA"><br><br>
                        B: <input type="number" name = "NumB"><br><br>
                        C: <input type="number" name = "NumC"><br><br>
                        <input type="submit" value="Enviar"><br><br>
    </form>


</body>
<?php
$a = $_GET["NumA"];
$b = $_GET["NumB"];
$c = $_GET["NumC"];
if(($a + $b < $c) ||($a + $c < $b) ||($b + $c < $a)){
    if($a == $b && $b == $c){
        echo "O triângulo é equilátero";
    }elseif(($a == $b && $b != $c) || ($a == $c && $b != $c) || ($b == $c && $a != $c)){
        echo "O triângulo é isósceles";
    }else{
        echo "O triângulo é escaleno";
    }
}else{
    echo "Não é triângulo";
}

?> 