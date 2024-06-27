<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <style>
    </style>
</head>
<body>
    
</body>
</html>
<?php 
$numero=5;
$res;
$res2;
for($i = 0; $i<= 10; $i++){
    $res = $numero * $i;
    echo"{$numero} X {$i}= {$i} <br>";
   
    
}
for($i = 1; $i<=9; $i++){
    for($j = 0; $j <= 9; $j++){
        $res2 = $i * $j;
        echo"{$i} X {$j}= {$res2} <br>";
    }
    echo "----------<br>";
}
?>