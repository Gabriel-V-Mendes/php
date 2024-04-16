<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de filmes</title>
</head>
<body>

<h1>Escolhe um filme</h1>

<form action="#" method="post">

<select name="filme" id="#">
    <option value="avatar">Avatar</option>
    <option value="titanic">Titanic</option>
    <option value="inception">A Origem</option>
</select>

<input type="submit" value="Ver detalhes">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

  switch($_POST["filme"]){
    case "avatar":
        $titulo = "Avatar";
        $sinopse = "Avatar é um filme de ficção científica dirigido por James Cameron. Ambientado no ano de 2154, o filme segue a história de um ex-fuzileiro naval paraplégico que é enviado a Pandora em uma missão única, tornando-se parte do programa Avatar.";
        $imagem = "https://m.media-amazon.com/images/I/91N1lG+LBIS._AC_UF894,1000_QL80_.jpg";
        break;

        case "titanic":
            $titulo = "Titanic";
            $sinopse = "Titanic é um filme de drama e romance dirigido por James Cameron, que retrata a história do naufrágio do RMS Titanic e o romance fictício entre dois passageiros durante sua viagem inaugural em 1912.";
            $imagem = "https://upload.wikimedia.org/wikipedia/pt/2/22/Titanic_poster.jpg";
            break;
             case "inception":
                $titulo = "A origem";
                $sinopse = "A Origem é um filme de ficção científica dirigido por Christopher Nolan. Ele conta a história de Dom Cobb, um ladrão habilidoso que rouba segredos do subconsciente das pessoas enquanto estão sonhando.";
                $imagem = "https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg";
                break;
                default:
                $titulo = "";
                $sinopse = ""; 
                $imagem = "";

  }

   if($titulo && $sinopse && $imagem){
    echo "<h2>$titulo</h2>";
    echo "<p> $sinopse <p>";
    echo "<img src='$imagem' alt='$titulo'>";
   } else{
    echo "<p>Por favor selecione um filme";
   }

}

?>
    
</body>
</html>