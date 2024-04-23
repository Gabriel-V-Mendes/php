<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>


<header>
    <h1>O <span>Jogão</span></h1>

    <button id="toggle-Mode">Modo Escuro</button>
</header>

<form action="#" method="post">  
   
    <label for="#" class="label1">Adivinhe a série ou jogo:</label>

    <input type="text" name="guess" required class="input2">

    <input type="submit" value="Tentar Adivinhar" class="input1">

</form>


<?php


$opcoes = array(
    "Game of Thrones" => "Uma série épica cheia de intrigas, batalhas e dragões.",
    "Dark Souls" => "Uma franquia de jogos famosa por sua dificuldade.",
    "Fullmetal Alchemist" => "Uma animação japonesa que conta a história de dois irmãos alquimistas.",
    "Fallout" => "Uma icônica franquia que retrata um futuro pós-apocalíptico depois de uma guerra nuclear, com uma estética dos anos 60.",
    "Vinland Saga" => "Um famoso seinen que retrata a história de um jovem viking em busca de vingança."
 
);

$serieOuJogo = array_rand($opcoes);
$dica = $opcoes[$serieOuJogo];
?>

<p>Dica: <?php echo $dica;


if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $adivinhacao = $_POST["guess"];

    if($adivinhacao == $serieOuJogo){
        echo "<p class='certo'>Parabéns! Você acertou! A resposta era: $serieOuJogo</p>";
    } else{
        echo "<p class='erro'>Que pena! Você errou. A resposta era: $serieOuJogo</p>";
    }


}

?>

<footer>
    <p>Desenvolvido por <span>Gabriel-v-Mendes</span>&copy</p>
</footer>
     <script src="script.js"></script>
</body>
</html>