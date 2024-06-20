<?php
//matriz - array associativo
$dados = array(
array("Nome" => "João", "idade" => 10),
array("Nome" => "Pedro", "idade" =>20),
array("Nome" => "Maria", "idade" => 30),
array("Nome" => "Lucas", "idade" => 40),
);
foreach($dados as $d){
    echo "\nNome:".$d['Nome']. "Idade:".$d['idade'];
}

?>