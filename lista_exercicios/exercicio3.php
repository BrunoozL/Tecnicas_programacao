<!--
3. Ordenação Manual de um Vetor
Crie um vetor de 3 números e ordene-os manualmente (sem usar sort()), comparando e trocando os valores, se necessário.
-->

<?php
$vetor = array(7, 9, 4, 6, 2, 1);
echo "Vetor não ordenado: ";
foreach($vetor as $valor_n_ordenado)
{
        echo $valor_n_ordenado, " ";
}

echo "<br><br>";

// Usando a forma da prof.
for($x = 0; $x < count($vetor); $x++)
{
    for($y = 0; $y < count($vetor) - 1; $y++)
    {
        if($vetor[$y] > $vetor[$y + 1])
        {
            $v1 = $vetor[$y];
            $vetor[$y] = $vetor[$y + 1];
            $vetor[$y + 1] = $v1;
        }
    }
}

/* // Usando minha forma
if($vetor[1] > $vetor[2])
{
    $v1 = $vetor[1];
    $v2 = $vetor[2];

    $vetor[1] = $v2;
    $vetor[2] = $v1;
}

if ($vetor[0] > $vetor[1])
{
    $v0 = $vetor[0];
    $v1 = $vetor[1];

    $vetor[0] = $v1;
    $vetor[1] = $v0;
}
    
if($vetor[1] > $vetor[2])
{
    $v1 = $vetor[1];
    $v2 = $vetor[2];

    $vetor[1] = $v2;
    $vetor[2] = $v1;
}
*/

echo "Vetor ordenado: ";
foreach($vetor as $valor_ordenado)
{
    echo $valor_ordenado, " ";
}
?>