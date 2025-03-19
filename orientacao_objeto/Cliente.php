<?php
    class Cliente
    {
        public string $nome;
        public int $cpf;
        public $celular;
    }

    $cliente1 = new Cliente();

    $cliente1->nome = "Bruno";
    $cliente1->cpf = 123456789;
    $cliente1->celular = "(14)99999999";

    echo "<pre>";
    var_dump($cliente1);
    echo "</pre>";
?>