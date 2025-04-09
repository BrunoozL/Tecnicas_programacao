<?php

require_once "../Models/Conexao.php";
require_once "../Models/UsuarioClass.php";
require_once "../Models/UsuarioDAO.php";

$msg = array("", "", "", "", "", "");
$erro = false;

if($_POST)
{
    if(empty($_POST["nome"]))
    {
        $msg[0] = "Preencha o campo";
        $erro = true;
    }

    if(empty($_POST["celular"]))
    {
        $msg[1] = "Preencha o campo";
        $erro = true;
    }

    if(empty($_POST["email"]))
    {
        $msg[2] = "Preencha o campo";
        $erro = true;
    }

    if(empty($_POST["senha"]))
    {
        $msg[3] = "Preencha o campo";
        $erro = true;
    }

    if(empty($_POST["confirmar_senha"]))
    {
        $msg[4] = "Confirme a senha";
        $erro = true;
    }

    if($_POST["senha"] != "" && $_POST["confirmar_senha"] != "")
    {
        if($_POST["senha"] != $_POST["confirmar_senha"])
        {
            $msg[5] = "Senhas não conferem";
            $erro = true;
        }
    }

    if(!$erro)
    {
        $usuario = new Usuario($_POST["nome"], $_POST["celular"], $_POST["email"], md5($_POST["senha"]));

        $usuarioDAO = new UsuarioDAO();
        $retorno = $usuarioDAO->insert($usuario);
        echo $retorno;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Usuários</title>
        <link rel="stylesheet" href="../styles/forms.css">
    </head>

    <body>
        <form class="forms" action="#" method="POST">
            <h1>Usuário</h1>
            <br><br>
            <div class="div_inputs">
                <label>Nome: </label>
                <input type="text" name="nome" tabindex="1">
                <div class="erro"><?php echo $msg[0]; ?></div>
                <br>

                <label>Celular: </label>
                <input type="text" name="celular" tabindex="2">
                <div class="erro"><?php echo $msg[1]; ?></div>
                <br>

                <label>Email: </label>
                <input type="text" name="email" tabindex="3">
                <div class="erro"><?php echo $msg[2]; ?></div>
                <br>

                <label>Senha: </label>
                <input type="password" name="senha" tabindex="4">
                <div class="erro"><?php echo $msg[3]; ?></div>
                <br>

                <label>Confirmar Senha: </label>
                <input type="password" name="confirmar_senha" tabindex="5">
                <div class="erro"><?php echo $msg[4]; ?></div>
                <br>
            </div>

            <br><br>
            <input type="submit" value="Enviar" tabindex="6">
        </form>
        <br>
    </body>
</html>