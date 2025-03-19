<!--
5. Tabela de Produtos (Array nomeado)
Crie um array nomeado onde a chave é o nome de um produto e o valor é seu preço. Exiba os produtos em uma tabela HTML.
-->

<?php
$produto1 = array("Chave" => "Shampoo", "Valor" => 29.90);
$produto2 = array("Chave" => "Condicionador", "Valor" => 34.99);
$produto3 = array("Chave" => "Luvas", "Valor" => 19.90);
$produto4 = array("Chave" => "Meias", "Valor" => 16.99);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px #000 solid;
            height: 300px;
            width: 300px;
        }

        tr, th, td {
            border: 1px #000 solid;
            padding: 10px;
            border-right: 0px;
            border-left: 0px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>X</th>
                <th>Chave</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Produto 1</th>
                <td><?php echo $produto1["Chave"] ?></td>
                <td><?php echo $produto1["Valor"] ?></td>
            </tr>
            <tr>
                <th>Produto 2</th>
                <td><?php echo $produto2["Chave"] ?></td>
                <td><?php echo $produto2["Valor"] ?></td>
            </tr>
            <tr>
                <th>Produto 3</th>
                <td><?php echo $produto3["Chave"] ?></td>
                <td><?php echo $produto3["Valor"] ?></td>
            </tr>
            <tr>
                <th>Produto 4</th>
                <td><?php echo $produto4["Chave"] ?></td>
                <td><?php echo $produto4["Valor"] ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>