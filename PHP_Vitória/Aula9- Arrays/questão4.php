
<!--
4. Faça um programa que determine e mostre os cinco primeiros múltiplos de 3 considerando números maiores que 0.. 
    -->
<?php

function multTres(){
    for($i = 1; $i <= 5; $i++){
        $multiplos = 3 * $i;
        echo"{$multiplos}\n";
    }
}

multTres();

?>  