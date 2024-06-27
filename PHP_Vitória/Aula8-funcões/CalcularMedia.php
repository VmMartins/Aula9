<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: cornflowerblue ;
            text-align: center;
        }
        p{
            width: 100;
            height: 50; 
        }
    </style>
</head>
<body>
    <h1>Digite seus dados para a verificação da sua nota: <h1>
       <p> 
        <form action="respostamedia.php" method="_GET">
        Nome:  <input type="text" name="Nome"><br>   
        1ºNota:  <input type="numbrer" name="n1"><br>
        2ºNota:  <input type="numbrer" name="n2"><br>
        3ºNota:  <input type="numbrer" name="n3"><br>
        <input type="submit" value="verificar">
        </form>
        </p>
</html>