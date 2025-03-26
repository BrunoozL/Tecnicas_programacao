<!-- Fazendo um teste de mesa utilizando a classe Pet -->

<?php

class Pet
{
    public function __construct
    (
        private string $nome = "",
        private int $idade = 0,
        private string $cor = "",
        private string $raca = ""
    ){}

    //========== Métodos GET ==========

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function getRaca()
    {
        return $this->raca;
    }
    //----------------------------------------------

    //========== Métodos SET ==========

    public function setNome($nomePet)
    {
        $this->nome = $nomePet;
    }

    public function setIdade($idadePet)
    {
        $this->idade = $idadePet;
    }

    public function setCor($corPet)
    {
        $this->cor = $corPet;
    }

    public function setRaca($racaPet)
    {
        $this->raca = $racaPet;
    }

    //----------------------------------------------
}

?>