<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>

<?php

$n1 = 12.7;
$n2 = 9;

echo "<br>A soma vale".($n1+$n2);
echo "<br>A subtração vale".($n1-$n2);
echo "<br>A multiplicação vale".($n1*$n2);
echo "<br>A divisão vale". round($n1/$n2,2);
echo "<br>O modulo vale".($n1%$n2);


$nota3 = 23;
$nota4 = 12;

$media = ($nota3 + $nota4)/2;
echo"<br/>A media vale $media";



echo "<br><br>";

$n5 = -7;
echo "Valor absoluto é" . abs($n5);

echo "<br> $n1 <sup>$n2</sup> =" . pow($n1,$n2);

echo "<br> A raiz de $n1 é:" . round(sqrt($n1),1);

echo "<br> Função Ceil". ceil($n1);
echo "<br> Função Floor". floor($n1);

echo "<br> A parte inteira de $n1 é:" . intval($n1);

echo "<br> O valor $n1 em moeda é R$ " . number_format($n1, 2, "," ,".");
?>
    
</body>
</html>