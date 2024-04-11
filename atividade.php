<!DOCTYPE html>
<html lang="pt-br">
<head>
     s
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>

    <?php

     $n1 = $_GET["n1"];
     $n2 = $_GET["n2"];

    ?>
</head>
<body>

    <?php
     
    echo "<br>A soma vale".($n1+$n2);
    echo "<br>A subtração vale".($n1-$n2);
    echo "<br>A multiplicação vale".($n1*$n2);
    echo "<br>A divisão vale". round($n1/$n2,2);
    echo "<br>O modulo vale".($n1%$n2);

    echo "<br> $n1 <sup>$n2</sup> =" . pow($n1,$n2);

    ?>

    <p><a href="form.html">voltar</a></p>
    
</body>
</html>