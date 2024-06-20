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

$T= $_GET["Tempo"];
$nome= $_GET["Nome"];
$S= $_GET["Sal"];
$Cal= ($S*0.25) + $S;
$Cal0= ($S*0.20) + $S + 100;
if($S <= 500 && $T < 1){
    echo"\n\n Olá {$nome}, o seu reajutre séra de $Cal";
    echo"<br><br>Por enquanto você não terá direito ao bônus!";

}elseif(($S > 500  && $S <= 1000) && ($T >= 1 && $T <= 3)){
    echo"\n\n Olá {$nome}, o seu reajutre séra de $Cal";
    echo"<br><br>Parabéns! O valor do bônus acrescentado: $Cal0";

}elseif(($S > 1000  && $S <= 1500) && ($T >= 4 && $T <= 6)){
    $Cal= ($S*0.15) + $S + 200;
    echo"\n\n Olá {$nome}, o seu reajutre séra de $Cal";
    echo"<br><br>Parabéns! O valor do bônus acrescentado: $Cal";

}elseif(($S > 1500 && $S <= 2000) && ($T >= 7 && $T <= 10)){
    $Cal= (($S*0.15) + $S + 300);
    echo"\n\n Olá {$nome}, o seu reajutre séra de $Cal";
    echo"<br><br>Parabéns! O valor do bônus acrecentado: $Cal";

}elseif($S > 2000 && $T > 10){
    $Cal= $S + 500;
    echo"\n\n Olá {$nome}, você não tem direito a reajustre!";
    echo"<br><br>Parabéns! O valor do bônus acrecentado: $Cal";
}
?>