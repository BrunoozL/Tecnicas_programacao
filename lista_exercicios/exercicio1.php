<!-- 
1. Exibir um Vetor Simples
Crie um vetor com 5 nomes e exiba-os em uma lista <ul> no HTML.
-->

<!doctype html>
<html>
<head>
</head>
<body>
    <h2>Lista de Exercícios</h2>
    <ul>
<?php
$nomes = array("Bruno", "Cainã", "Weverton", "Gabriel", "Pedro");

foreach($nomes as $dados)
{
    echo "<li>$dados</li>";
}
?>
    </ul>

</body>
</html>

