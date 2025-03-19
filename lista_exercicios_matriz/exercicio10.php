<!--
10. Criar uma Agenda Simples
Crie uma matriz nomeada para armazenar 3 contatos (nome, telefone e e-mail) e exiba os dados acessando os índices diretamente.
-->

<?php
    $contatos = array(
        array("Nome" => "Bruno", "Telefone" => 123456789, "E-mail" => "x@gmail.com"),
        array("Nome" => "Weverton", "Telefone" => 987654321, "E-mail" => "y@gmail.com"),
        array("Nome" => "Gabriel", "Telefone" => 999999999, "E-mail" => "z@gmail.com")
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
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $contatos[0]["Nome"]; ?></td>
                <td><?php echo $contatos[0]["Telefone"]; ?></td>
                <td><?php echo $contatos[0]["E-mail"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $contatos[1]["Nome"]; ?></td>
                <td><?php echo $contatos[1]["Telefone"]; ?></td>
                <td><?php echo $contatos[1]["E-mail"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $contatos[2]["Nome"]; ?></td>
                <td><?php echo $contatos[2]["Telefone"]; ?></td>
                <td><?php echo $contatos[2]["E-mail"]; ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>