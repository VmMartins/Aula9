<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão_04</title>
</head>

<body>
    <!--
4)Calcule as raízes da equação de 2º grau. Lembrando que:
A variável a tem que ser diferente de zero. Caso seja igual, imprima a mensagem “Não e equação de segundo grau”. 

• Se ∆ < 0, não existe real. Imprima a mensagem: Não existe raiz. 

• Se ∆ = 0, existe uma raiz real. Imprima a raiz e a mensagem Raiz  única.

• Se ∆ ≥ 0, imprima as duas raízes reais. 
-->

    <form action="" method="get">
        <h1>Sistema para cacular a raiz quadrada:!<h1>
                <h3>Insira os coeficientes:<h3><br><br>
                        A: <input type="number" name = "NumA"><br><br>
                        B: <input type="number" name = "NumB"><br><br>
                        C: <input type="number" name = "NumC"><br><br>
                        <input type="submit" value="Enviar"><br><br>
    </form>


</body>

</html>
<?php
$a = $_GET["NumA"];
$b = $_GET["NumB"];
$c = $_GET["NumC"];



if ($a == 0){
    echo "Não é equação de segundo grau";
} else {

    $Delta = ($b * $b) - 4 * $a * $c;
    $RD = sqrt($Delta);
    $x1 = (-$b + $RD) / (2 * $a);
    $x2 = (-$b - $RD) / (2 * $a);

    echo "O resutado de delta é: $Delta";

    if($Delta < 0) {
        echo "<br><br>Não exite raiz!";
    }elseif ($Delta == 0) {
        echo "<br><br>Raíz única!";
       if ($x1 >= 0 && $x2 > 0) {
            echo "<br><br>A raiz é : $x1";
        } elseif ($x2 >= 0 && $x1 < 0) {
            echo "<br><br>A raiz é: $x2";
        }
    }else {
        echo "<br><br>Delta possui duas raízes!";
        echo "<br><br>X1 = $x1";
        echo "<br><br>X2 = $x2";
    }

}

?>