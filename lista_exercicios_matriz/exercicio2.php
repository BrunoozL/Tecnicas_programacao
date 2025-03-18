<!--
2. Somar Elementos de um Vetor
Crie um vetor com 5 números inteiros e some manualmente os valores acessando cada índice diretamente.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $vetor = array(1, 4, 5, 6, 7);
    $x = 0;

    echo "Valores em cada índice: ";

    foreach($vetor as $indice => $dados)
    {
        echo "<p>",  $indice,  " - ", $dados, "<p>";

        $x = $x + $dados;
    }

    echo "Soma de todos os valores: $x";
?>
    
</body>
</html>