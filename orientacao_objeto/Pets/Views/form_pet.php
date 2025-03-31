<?php

require "../Models/PetClass.php";

$msg = array("", "", "", "");
$erro = false;
$nome = "";
$idade = null;
$cor = "";
$raca = "";


if($_POST)
{
    if(empty($_POST["nome"]))
    {
        $msg[0] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $nome = $_POST["nome"];
    }

    if(empty($_POST["idade"]))
    {
        $msg[1] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $idade = $_POST["idade"];
    }

    if(empty($_POST["cor"]))
    {
        $msg[2] = "Preencha o campo";
        $erro = true;
    }
    else
    {
        $cor = $_POST["cor"];
    }

    if($_POST["raca"] !== 0)
    {
        $raca = $_POST["raca"];
    }
    else
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
        echo "Raça: {$pet->getRaca()}<br><br>";
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
            <br><br>
            <div class="div_inputs">
                <label>Nome: </label>
                <input type="text" name="nome" tabindex="1" value="<?php echo $nome;?>">
                <div class="erro"><?php echo $msg[0]; ?></div>
                <br>

                <label>Idade: </label>
                <input type="text" name="idade" tabindex="2" value="<?php echo $idade;?>">
                <div class="erro"><?php echo $msg[1]; ?></div>
                <br>

                <label>Cor: </label>
                <input type="text" name="cor" tabindex="3" value="<?php echo $cor;?>">
                <div class="erro"><?php echo $msg[2]; ?></div>
                <br>

                <label>Raça: </label>
                <select name="raca" tabindex="4">
                    <option value="0">Escolha a raça</option>
                    <option value="<?php if($_POST["raca"] == 1){echo $raca;} ?>">Pitbull</option>
                    <option value="<?php if($_POST["raca"] == 2){echo $raca;} ?>">Lhasa</option>
                    <option value="<?php if($_POST["raca"] == 3){echo $raca;} ?>">Yorkshare</option>
                    <option value="<?php if($_POST["raca"] == 4){echo $raca;} ?>">Indefinido</option>
                </select>
                <div class="erro"><?php echo $msg[3]; ?></div>
            </div>

            <br><br>
            <input type="submit" value="Enviar" tabindex="5">
        </form>
        <br>
    </body>
</html>