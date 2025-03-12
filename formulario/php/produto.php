<?php
    $msg = array("Insira o codigo do produto", "Insira o nome do produto", "Insira o preço do produto");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/produto.css">
    <title>Produto</title>
</head>
<body>

<form action="#" method="post">
    <h1>Produto</h1>
    <br>
    <label for="codigo">Código: </label>
    <input type="text" name="codigo">
    <div class="erro">
        <?php 
            if(empty($_POST["codigo"]))
            {
                echo $msg[0];
            } 
        ?>
        </div>
    <br>
    <label for="nome">Nome: </label>
    <input type="text" name="nome">
    <div class="erro">
        <?php 
            if(empty($_POST["nome"]))
            {
                echo $msg[1];
            } 
        ?>
    </div>
    <br>
    <label for="preco">Preço: </label>
    <input type="text" name="preco">
    <div class="erro">
        <?php 
            if(empty($_POST["preco"]))
            {
                echo $msg[2];
            } 
        ?>
    </div>
    <br>
    <textarea name="descricao" placeholder="Descrição do produto.."></textarea>
    <br><br>
    <input type="submit" value="Enviar">
</form>
    
</body>
</html>