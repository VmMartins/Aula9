<?php
$senha = $_GET['senha'];
$login= $_GET['login'];

echo "{$senha}\n";//debugar
echo "{$login}";

while($senha != 1234 && $login != "codepeia"){
    header('location: login.php');
    

}
echo "Bem-vindo ao sistema!";

?>