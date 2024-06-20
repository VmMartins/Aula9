<?php
//definição da função
function soma($n1, $n2){
    $res = $n1 +$n2;
    echo "Soma: {$res}";
} 
//chamada da função/invocação
soma(1,1);

function sub($num1, $num2){
    $res = $num1 - $num2;
    return$res;
}
$retornoFuncao = sub(5,6);
echo "\n Retorno: {$retornoFuncao}";

function calcular ($n1,$n2){
    echo "O resultado da soma:";
    soma($n1,$n2);
    $resSub = sub($n1, $n2);
    echo"\n Subtração:{$resSub}";  
}

function calcularImc($peso, $altura){
    $imc = $peso/ (pow($altura, 2));
    return $imc;
}
//debugar
$teste = calcularImc(60,1.66);
echo "{$teste}";

function Situacao($imc){
    if($imc < 16){
        echo" O imc é: {$imc}.\n
        Situação: Baixo peso";
    }else if($imc >= 16 && $imc <=25){
        echo" O imc é: {$imc}.\n
        Situação: Sudavél";
    }else if($imc > 25 && $imc <= 29 ){
        echo" O imc é: {$imc}.\n
        Situação: Sobrepeso";
    }else{
        echo" O imc é: {$imc}.\n
        Situação: Obeso!";
    }

}
//debugar
$imc = calcularImc(54,1.50);

Situacao($imc);
?>