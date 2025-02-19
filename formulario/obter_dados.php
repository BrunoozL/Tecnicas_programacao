<?php
	// VARIAVEIS GLOBAIS
	// Utilizando o método POST, coletamos os dados com a variavel $_POST
	// Utilizando o método GET, coletamos os dados com a variavel $_GET
	
	// As duas formas funcionam, a mais simples é a segunda opção
	// echo "O nome inserido é: " . $_GET["nome"] . "<br>";
	// echo "O nome inserido é: {$_GET["nome"]}<br>";
	
	// Pegando tudo do formulário criado no "index.html"
	
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
	$marcado = false;
	echo "Lazeres:<br> ";
	
	if(isset($_GET["lazer1"]))
	{
		echo "{$_GET["lazer1"]}<br>";
		$marcado = true;
	}
	if(isset($_GET["lazer2"]))
	{
		echo "{$_GET["lazer2"]}<br>";
		$marcado = true;
	}
	if(isset($_GET["lazer3"]))
	{
		echo "{$_GET["lazer3"]}<br>";
		$marcado = true;
	}
	if($marcado == false)
	{
		echo "Nenhum lazer selecionado.";
	}
	
	// Verificando a observação de outra forma dos demais acima
	if(empty($_GET["observacao"]))
	{
		echo "Não foi informado nenhuma observação.";
	}
	else
	{
		echo "{$_GET["observacao"]}<br>";
	}
?>