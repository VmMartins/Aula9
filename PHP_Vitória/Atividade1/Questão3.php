<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
    <form action="" method="get">
        <h1>Sistema para cacular direito sobre aposentadoria!<h1>
                <h3>Insira seus dados:<h3><br><br>
                        Nome: <input type="text" name="Nome"><br><br>
                        Salário: <input type="number" name="Sal"><br><br>
                        Tempo de serviço: <input type="number" name="Tempo"><br><br>
                        <input type="submit" name="Enviar"><br><br>
    </form>
    </p>
</body>

</html>
<?php

$tempo = $_GET["Tempo"];
$T = (int) $tempo;
$nome = $_GET["Nome"];
$S = $_GET["Sal"];
$soma = 0;
$Cal = 0;
if ($S <= 500) {
    $Cal = (($S * 0.25) + $S);
    echo "\n\n Olá {$nome}, o seu novo sálario séra de $Cal";
} elseif ($S > 500 && $S <= 1000) {
    $Cal = (($S * 0.20) + $S);
    echo "\n\n Olá {$nome}, o seu novo sálario séra de $Cal";
} elseif ($S > 1000 && $S <= 1500) {
    $Cal = (($S * 0.15) + $S);
    echo "\n\n Olá {$nome}, o seu novo sálario séra de $Cal";
} elseif ($S > 1500 && $S <= 2000) {
    $Cal = (($S * 0.15) + $S + 300);
    echo "\n\n Olá {$nome}, o seu novo sálario séra de $Cal";
} elseif ($S > 2000) {
    echo "\n\n Olá {$nome}, Você não tem direito a reajustre!";
}


if ($T < 1) {
    echo "\n\nO Você não tem direito a Bônus!";
} elseif ($T >= 1 && $T < 3) {
    $Cal += 100;
    echo "\n\n O Você tem direito a Bônus!";
    echo "\n\n Reajustre R$: $Cal";
} elseif ($T >= 4 && $T < 6) {
    $Cal += 200;
    echo "\n\n O Você tem direito a Bônus!";
    echo "\n\n Reajustre R$: $Cal";
} elseif ($T >= 7 && $T < 10) {
    $Cal += 100;
    echo "\n\n O Você tem direito a Bônus!";
    echo "\n\n Reajustre R$: $Cal";
} elseif ($T < 10) {
    $soma = $S + 500;
    echo "\n\n O Você tem direito a Bônus!";
    echo "\n\n Reajustre R$: $soma";
}


?>