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
    <h1>Digite seus dados para a verificação do IMC: <h1>
       <p> 
        <form action="imc.php" method="_GET">
        Peso:  <input type="numbrer" name="peso"><br>
        Altura:  <input type="numbrer" name="altura"><br>
        <input type="submit" value="verificar">
        </form>
        </p>
</html>
