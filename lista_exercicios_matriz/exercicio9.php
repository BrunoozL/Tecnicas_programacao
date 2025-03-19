<!--
    9. Criar um Vetor de Cores e Exibi-las em HTML
Crie um vetor de cores e use-o para exibir quadrados coloridos (<div style="width:50px; height:50px; background-color:cor;"></div>).
-->

<?php
    $vetor = array("#00BFFF", "#00FA9A", "#FFFF00", "#FF8C00", "#FF0000");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width: 50px; height: 50px; background-color: <?php echo $vetor[0]; ?>;"></div>
    <div style="width: 50px; height: 50px; background-color: <?php echo $vetor[1]; ?>;"></div>
    <div style="width: 50px; height: 50px; background-color: <?php echo $vetor[2]; ?>;"></div>
    <div style="width: 50px; height: 50px; background-color: <?php echo $vetor[3]; ?>;"></div>
    <div style="width: 50px; height: 50px; background-color: <?php echo $vetor[4]; ?>;"></div>
</body>
</html>