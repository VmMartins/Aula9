<?php
$peso = $_GET['peso'];
$altura= $_GET['altura'];

function calcularImc($peso, $altura){
    $imc = $peso/ (pow($altura, 2));
    return $imc;
}
function Situacao($imc){
    if($imc < 16){
        echo" O imc é: {$imc}
        <br><br>Situação: Baixo peso";
    }else if($imc >= 16 && $imc <=25){
        echo" O imc é: {$imc}
        <br><br>Situação: Sudavél";
    }else if($imc > 25 && $imc <= 29 ){
        echo" O imc é: {$imc}
        <br><br>Situação: Sobrepeso";
    }else{
        echo" O imc é: {$imc}
        <br><br> Situação: Obeso!";
    }

}
$imc = calcularImc($peso, $altura);
Situacao($imc);
?>