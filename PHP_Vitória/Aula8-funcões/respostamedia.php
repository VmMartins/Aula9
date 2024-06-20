<?php
$nome= $_GET['Nome'];
$n1= $_GET['n1'];
$n2= $_GET['n2'];
$n3= $_GET['n3'];
function calcularMedia($n1, $n2, $n3){
    $media = (($n1 +$n2 + $n3)/3);
    return $media;
} 
echo"{$nome}<br><br>";
function Situacao($media){
    if($media >= 7){
        echo"A média é: {$media}.
        <br><br>APROVADO(a)!";
    }else if($media >= 4 && $media < 7){
        echo"A média é: {$media}.
        <br><br>RECUPERAÇÃO!";
    }else{
        echo"
        A média é: {$media}.
        <br><br>REPROVADO(a)!"; 
    }
}
    $media = calcularMedia($n1, $n2, $n3);
    Situacao($media);

?>