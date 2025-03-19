<!--
8. Exibir a Diagonal Principal de uma Matriz 3x3
Crie uma matriz 3x3 fixa e exiba apenas os números da diagonal principal (onde o índice da linha é igual ao da coluna).
-->

<?php
    $matriz = array(
        array(26, 28, 7),
        array(12, 41, 90),
        array(17, 13, 33)
    )
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

        td, tr {
            padding: 10px;
            border: 1px #000 solid;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td><?php echo $matriz[0][0]; ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $matriz[1][1]; ?></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $matriz[2][2]; ?></td>
        </tr>
    </table>
    
</body>
</html>