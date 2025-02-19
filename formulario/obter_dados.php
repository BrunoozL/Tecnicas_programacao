<?php
	// VARIAVEIS GLOBAIS
	// Utilizando o método POST, coletamos os dados com a variavel $_POST
	// Utilizando o método GET, coletamos os dados com a variavel $_GET
	
	// As duas formas funcionam, a mais simples é a segunda opção
	echo "O nome inserido é: " . $_GET["nome"] . "<br>";
	echo "O nome inserido é: {$_GET["nome"]}<br>";
?>