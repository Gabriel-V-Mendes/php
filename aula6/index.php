<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>

<h1>Operadores Relacionais</h1>

 <form action="" method="get">
 <label for="nome">Nome:</label><br>
 <input type="text" name="nomev" id="nome"><br><br>

 <label for="idade">Idade</label><br>
 <input type="number" name="idadev" id="idade"><br><br>

 <input type="submit" value="Verificar">

</form>

     <?php
     
     $nome = $_GET["nomev"];
     $idade = $_GET["idadev"];

     echo " Olá $nome. Você tem $idade anos.";

     ?>

     <h3>Operador E / && / And</h3>

     <?php

    if($idade >= 18 && $idade <= 65) {
        echo "<br> Voto Obrigatorio";
    } else {
        echo "<br> Voto Não Obrigatorio";
    }

    ?>

    <h3>Operador OU / || / Or</h3>

    <?php
     
     if($idade <18 || $idade > 65){
        echo "<br> Voto Não Obrigadotrio";
     } else{

        echo "<br> Voto Obrigatorio";
     }

    ?>

    <h3>Operador XOR / OU Exclusivo</h3>

    <?php

     $votou = true;
     $justificou = false;

     if($votou == true xor $justificou == true){
        echo "<br> Voce esta regular com a justiça eleitoral.";
     } else{
        echo "<br> Não é possivel votar e justificar no mesmo ano.";
     }

    ?>

    <h3>Operador Ternário</h3>

    <form action="" method="get">
        Nota 1 <input type="number" name="n1" id=""> <br>
        Nota 2 <input type="number" name="n2" id=""> <br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1 + $nota2) / 2;

    echo "<br> A media entre $nota1 e $nota2 é $media.";
    echo "<br> A situação do aluno é: " . (($media > 7) ? "Aprovado"
    : "Reprovado");

    ?>

</body>
</html>