<?php
/*
3. A prefeitura de uma cidade fez uma pesquisa entre os seus habitantes, coletando dados sobre o salário e número de filhos. Faça um procedimento que leia esses dados para um número não determinado de pessoas e retorne a média de salário da população, a média do número de filhos, o maior salário e o percentual de pessoas com salário até R$350,00.
*/


//dados das pessoas da cidade
$dados = [
    ['salario' => 1000, 'filhos' => 2],
    ['salario' => 2000, 'filhos' => 3],
    ['salario' => 3500, 'filhos' => 1],
    ['salario' => 300, 'filhos' => 4],
    ['salario' => 100, 'filhos' => 2],
    ['salario' => 350, 'filhos' => 1],
    ['salario' => 250, 'filhos' => 3],
];

//Função

function estatistica($dados){
    $somaSalario = 0;
    $somaFilhos = 0;
    $totalPessoas = count($dados);
    $maiorsalario = 0;
    $salariosAte350 = 0;

foreach($dados as $p){
    $salario = $p['salario'];
    $filhos = $p['filhos'];

    $somaSalario = $salario;
    $somaFilhos = $filhos;

    if($salario > $maiorsalario){
        $maiorsalario = $salario;
    }
    
    if($salario <= 350){
        $salariosAte350++;
    }
}

$mediaSalaio =  $somaSalario/$totalPessoas;
$mediaFilhos =  $somaFilhos/$totalPessoas;
$porcentagemSalario350 = ($salariosAte350/$totalPessoas) * 100;
echo "Média do sálario da população: ".number_format($mediaSalaio,2). "\n";
echo "Maior salario: R$".number_format($maiorsalario,2). "\n";
echo "Média do quantidade de filhos:".number_format($mediaFilhos,2)."\n";
echo "Porcentagem de pessoas com sálario até R$ 350,00:".number_format($porcentagemSalario350,2)."\n";

}
estatistica($dados);
?>