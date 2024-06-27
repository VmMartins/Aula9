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
    <h1>LOGIN DO SISTEMA <h1>
       <p> 
        <form action="TestaSenha.php" method="_GET">
        Login: <input type="text" name="login"><br>
        Senha:<input type="password" name="senha"><br>
        <input type="submit" value="Logar">
        </form>
        </p>
</html>