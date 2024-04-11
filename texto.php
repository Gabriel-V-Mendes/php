<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de texto</title>
</head>
<body>

<h1>Função de texto</h1>

  <?php


$texto = "Instituto-da-Opotunidade-Social";
$textoc = str_replace("-", " ", $texto);
$nome = "gabriel-do-vale-mendes";

echo $textoc;
echo "<br> texto corrigido: " . str_replace("-", " ", $texto);

echo "<br> Quantidade de caracteres: " . strlen($texto);

echo "<br> Quantidade de caracteres: "  . strlen($textoc);

echo "<br> Quantidade de Palavras: " . str_word_count($texto);

echo "<br> Quantidade de Palavras:" . str_word_count($textoc);

echo "<br> Texto em minúsculo: " . strtolower($textoc);

echo "<br> Exemplo: " . ucfirst($nome); 

echo "<br> Exemplo: " . ucwords($nome);

echo "<br> Exemplo: " . strpos($textoc, "Social");

echo "<br> Exemplo: " . strrev($nome);

echo "<br> Exemplo: " . substr($textoc, 10);

echo "<br> Exemplo: " . str_repeat("Nossa", 15);

echo "<br> Exemplo: " . strrev(strtoupper($textoc));

echo "<br> Exemplo: " . substr_count($textoc, "Social");

echo "<br> Exemplo: " . metaphone($textoc);
// Remove todas as silabas do texto

echo "<br> Exemplo: " . strtoupper($textoc);
// faz todas as letras ficarem maiusculas

echo "<br> Exemplo: " . strtolower($textoc);
// faz todas as letras ficarem minusculas

echo "<br> Exemplo: " . strspn($nome, 1);
// retorna ao comprimento inicial da string


echo "<br> Exemplo: " . stream_set_blocking($textoc);
   ?>
    
</body>
</html>