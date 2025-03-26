<?php
    require "../Models/PetClass.php";

    $msg = array("", "", "", "");
    $erro = false;

    if($_POST)
    {
        if(empty($_POST["nome"]))
        {
            $msg[0] = "Preencha o campo";
            $erro = true;
        }

        if(empty($_POST["idade"]))
        {
            $msg[1] = "Preencha o campo";
            $erro = true;
        }

        if(empty($_POST["cor"]))
        {
            $msg[2] = "Preencha o campo";
            $erro = true;
        }

        if($_POST["raca"] == 0)
        {
            $msg[3] = "Selecione uma das opções sugeridas";
            $erro = true;
        }

        if(!$erro)
        {
            $pet = new Pet($_POST["nome"], $_POST["idade"], $_POST["cor"], $_POST["raca"]);

            //Mostrando os dados
            echo "Nome: {$pet->getNome()}<br>";
            echo "Idade: {$pet->getIdade()}<br>";
            echo "Cor: {$pet->getCor()}<br>";
            echo "Raça: {$pet->getRaca()}<br>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pets</title>
        <link rel="stylesheet" href="../styles/form_pet.css">
    </head>

    <body>
        <form class="form_pet" action="#" method="POST">
            <h1>Pet</h1>
            <label>Nome: </label>
            <input type="text" name="nome">
            <div class="erro"></div>

            <label>Idade: </label>
            <input type="text" name="idade">
            <div class="erro"></div>

            <label>Cor: </label>
            <input type="text" name="cor">
            <div class="erro"></div>

            <label>Raça: </label>
            <select name="raca">
                <option value="0">Escolha a raça</option>
                <option>Pitbull</option>
                <option>Lhasa</option>
                <option>Yorkshare</option>
                <option>Indefinido</option>
            </select>
            <div class="erro"></div>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>