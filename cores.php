<!DOCTYPE html>
<html lang="pt-br">
<head>

   <?php
   $texto = $_GET["texto"];
   $tamanho = $_GET["tamanho"];
   $cor = $_GET["cor"];
   $font = $_GET["font"]
   ?>

   <style>
    span.texto{
        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>;
    }
   </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<h1>Resultado</h1>

    <?php
    echo "<span class  = 'texto'> $texto </span>";
    ?>
</body>
</html>