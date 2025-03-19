<!--
6. Média de Notas dos Alunos
Armazene as notas de 2 alunos (cada um com 3 notas) e exiba a média de cada um.
-->

<?php
    $aluno1 = array(10, 9.2, 9.6);
    $aluno2 = array(7, 10, 9.1);

    $media_aluno1 = ($aluno1[0] + $aluno1[1] + $aluno1[2]) / 3;
    $media_aluno2 = ($aluno2[0] + $aluno2[1] + $aluno2[2]) / 3;
?>

<p><b>Média do Aluno 1: </b> <?php echo "$media_aluno1" ?></p>

<p><b>Média do Aluno 2:</b> <?php echo "$media_aluno2" ?></p>