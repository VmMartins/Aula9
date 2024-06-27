<?php
$valores = array(10,20,80,100);
$soma = 0;
$media = 0;

echo "Valores:"; 
foreach($valores as $v ){
    $soma += $v;
    $total = $soma;
    $media = $soma/count ($valores);
    echo "  ".$soma ."\n\t";
};

echo "\n\nSoma: ".$soma; 
echo "\nMédia: ".$media; 
?>