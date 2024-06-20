<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: aquamarine;
            text-align: center;
        }
        p{
            width: 100;
            height: 50; 
        }
    </style>
</head>
<body>
    <h1>Escreva os números que deseja somar: <h1>
       <p> 
        <form action="resposta.php" method="_GET">
        1º:  <input type="numbrer" name="n1"><br>
        2º:  <input type="numbrer" name="n2"><br>
        <input type="submit" value="verificar">
        </form>
        </p>
</html>
