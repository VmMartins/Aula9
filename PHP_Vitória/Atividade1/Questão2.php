<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão_02</title>
</head>
<body>
<!--2- Leia a idade e o tempo de serviço de um trabalhador e escreva se ele pode ou não se  aposentar. As condições para aposentadoria são: • Ter pelo menos 65 anos; • Ou ter trabalhado pelo menos 30 anos; • Ou ter pelo menos 60 anos e trabalhado pelo menos 25 anos.-->
    
<form action="" method="get">
         <h1>Sistema para cacular direito sobre aposentadoria!<h1>
            <h3>Insira seus dados:<h3><br><br>
                Nome: <input type="text" name="Nome"><br><br>
                Idade: <input type="number" name="Idade"><br><br>
                Tempo de serviço: <input type="number" name="Tempo"><br><br>
                <input type="submit" name="Enviar"><br><br>
    </form>


</body>
</html>
<?php
    $Nome= $_GET["Nome"];
    $Idade = $_GET["Idade"];
    $Tempo = $_GET["Tempo"];

   
    if($Idade >= 65){
        echo"<br><br>Olá {$Nome}, você tem direito a aposentadoria.<br><br>Parabéns!";
    }elseif($Tempo >= 30) {
        echo"<br><br>Olá {$Nome}, você tem direito a aposentadoria, pelo tempo de serviço.<br><br>Obrigado pela contribuição para o crescimento do nosso país!";
    }elseif($Idade >= 60 && $Tempo >= 25) {
        echo"<br><br>Olá {$Nome}, você tem direito a aposentadoria.<br><br>Parabéns!";
    }else{
        echo "Olá {$Nome}, você não tem direito a aposentadoria!<br><br>Sinto muito!";
    };
    
    ?>