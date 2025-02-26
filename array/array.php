<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
	</head>
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
		
		* {
			font-family: "Roboto", serif;
		}
		
		</style>
<body>
	<?php
		$pessoa = array("Bruno", 19, 1.66, 60.6, true);

		// Usando for	
		for ($x = 0; $x < 5; $x++)
		{
			echo "$pessoa[$x] <br>";
		}

		echo "<br><br>";

		// Usando o for com o count
		for ($x = 0; $x < count($pessoa); $x++)
		{
			echo "$pessoa[$x] <br>";
		}

		echo "<br><br>";

		// Usando foreach forma reduzida (sem pegar o índice)
		foreach ($pessoa as $dado)
		{
			echo "$dado <br>";
		}

		// Adicionando mais um na matriz
		$pessoa[] = "Mily";

		echo "<br><br>";

		echo " <div style=' border: 1px #000 solid; background-color: #FF6EB4;'> ";
		// Usando foreach forma completa (pegando o índice)
		foreach ($pessoa as $indice => $dado)
		{
			echo "$indice : $dado <br>";
		}
		echo " </div> ";

		echo "<br><br>";

		// Definindo um array nomeando os índices
		$pessoa_teste = array("Nome" => "Bruno", "Idade" => 19, "Altura" => 1.66, "Peso" => 60.6, "Namoro" => true);

		foreach ($pessoa_teste as $indices => $dados)
		{
			echo "$indices - $dados<br>";
		}
		
		$notas = array(
			array("Bruno", 10.0, 9.7, 9.9),
			array("Cainã", 2.0, 5.4, 1.6),
			array("Weverton", 3.3, 7.5, 4.5)
		);
		
		for($lin = 0; $lin < 3; $lin++)
		{
			for($col = 0; $col < 4; $col++)
			{
				echo "{$notas[$lin][$col]}<br>";
			}
		}
		
		foreach($notas as $vetor)
		{
			foreach($vetor as $dadoss)
			{
				echo "$dadoss<br>";
			}
		}
		
		//echo "(<pre>)";
		//print_r($notas);
		//var_dump($notas);
		//echo "</pre>";
		
	?>
</body>

</html>