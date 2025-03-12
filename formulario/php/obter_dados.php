<!doctype html>
<html>
    <head>
        <style>
			*{
				margin: 0;
				padding: 0;
				line-height: 1.2;
				color: #fff;
			}
            body {
				background-color: #2a2a2a;
			}

			label, p {
				color: #fff;
			}
        </style>
    </head>

    <body>

<?php
	// VARIAVEIS GLOBAIS
	// Utilizando o método POST, coletamos os dados com a variavel $_POST
	// Utilizando o método GET, coletamos dados com a variavel $_GET
	
	// As duas formas funcionam, a mais simples é a segunda opção
	// echo "O nome inserido é: " . $_GET["nome"] . "<br>";
	// echo "O nome inserido é: {$_GET["nome"]}<br>";
	
	// Pegando tudo do formulário criado no "index.html"

if ($_GET)
{

	echo "O nome inserido é: {$_GET["nome"]}<br>";
	echo "O email inserido é: {$_GET["email"]}<br>";
	echo "A senha inserida é: {$_GET["senha"]}<br>";
	echo "A profissão inserida é: {$_GET["profissao"]}<br>";
	
	// Verificando se sexo foi informado.
	if(isset($_GET["sexo"]))
	{
		echo "Seu sexo é: {$_GET["sexo"]}<br>";
	}
	else
	{
		echo "Sexo não foi informado.<br>";
	}
	
	// Verificando o lazer
	echo "Lazeres:<br> ";
	
	if(isset($_GET["lazer"]))
	{
        foreach($_GET["lazer"] as $dado)
        {
            echo $dado , "<br>";
        }
	}
	else
    {
		echo "Nenhum lazer selecionado.<br>";
	}
	
	// Verificando a observação de outra forma dos demais acima
	if(empty($_GET["observacao"]))
	{
		echo "Não foi informado nenhuma observação.<br>";
	}
	else
	{
		echo "{$_GET["observacao"]}<br>";
	}
}
else 
{
    header("location:index.html");
    die();
}
?>
</body>
</html>