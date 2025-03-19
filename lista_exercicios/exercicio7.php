<!--
7. Copiar os Elementos de um Vetor para Outro
Crie um vetor com 4 números e copie cada valor manualmente para um segundo vetor.
-->

<?php
$vetor1 = array(13, 27, 24, 91);
$vetor2 = array(0, 0, 0, 0);
$x = 0;

foreach($vetor1 as $dados)
{
    $vetor2[$x] = $vetor1[$x];
    $x++;
}

echo "<b>Primeiro vetor:</b> ";
foreach($vetor1 as $valor1)
{
    echo " - $valor1";
}

echo "<br><br>";

echo "<b>Segundo vetor:</b> ";
foreach($vetor2 as $valor2)
{
    echo " - $valor2";
}
?>