<!--
4. Matriz 2x2 Estática
Crie uma matriz 2x2 e exiba seus valores em uma tabela HTML, usando comando for.
-->

<?php
$matriz = array(
            array(1, 5),
            array(8, 9)
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
            <td><?php echo $matriz[0][0] ?></td>
            <td><?php echo $matriz[0][1] ?></td>
        </tr>
        <tr>
            <td><?php echo $matriz[1][0] ?></td>
            <td><?php echo $matriz[1][1] ?></td>
        </tr>
    </table>
</body>
</html>