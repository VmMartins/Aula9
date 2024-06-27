<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão_01</title>
</head>
<body>


    <form action="" method="get">
         <h1>Sistema para cacular a média e aprovação<h1>
            <h3>Insira as suas notas:<h3><br><br>
                1ºNota: <input type="number" name="N1"><br><br>
                2ºNota: <input type="number" name="N2"><br><br>
                3ºNota: <input type="number" name="N3"><br><br>
                <input type="submit" name="Enviar"><br><br>
    </form>            


</body>
</html>
    <?php
    $N1 = $_GET["N1"];
    $N2 = $_GET["N2"];
    $N3 = $_GET["N3"];


    $Mult = ($N1* 1) + ($N2*1) + ($N3 * 2);
    $Media = $Mult /4;

    echo "<br>A média é: ". $Media;
    if($Media >= 7){
        echo"<br><br>O aluno(a) está APROVADO!";
    }else{
        echo "<br><br>O(a) aluno(a) está REPROVADO!";
    };
    
    ?>