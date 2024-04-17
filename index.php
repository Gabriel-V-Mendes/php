<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

<header>
<h1>Gerar Tabuada</h1>
</header>

<form action="" method="post">

<label for="number">Digite Um Numero</label>

<input type="number" name="number" id="number" required>

<input type="submit" value="gerar tabuada" class="a">

</form>

<?php

if($_SERVER ["REQUEST_METHOD"] == "POST"){

    $number = $_POST["number"];
    $i = 1;
    echo "<h3>Tabuada de $number</h3>";
    echo "<ul>";
    while($i <= 10){
        $resultado = $number * $i;
        echo "<li>$number x $i = $resultado</li>";
        $i++;
    }
    echo "</ul>";
}

?>
    
</body>
</html>