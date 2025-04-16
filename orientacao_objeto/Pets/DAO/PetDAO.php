<?php  
    class PetDAO extends Conexao
    {
        public function __construct()
        {
            parent:: __construct();
        }

        public function insert($pet)
        {
            $sql = "INSERT INTO pets (nome, idade, cor, raca, id_usuario) VALUES(?, ?, ?, ?)";
    
            $stm = $this->db->prepare($sql);
    
            $stm->bindValue(1, $pet->getNome());
            $stm->bindValue(2, $pet->getIdade());
            $stm->bindValue(3, $pet->getCor());
            $stm->bindValue(4, $pet->getRaca());
            $stm->execute();

            $this->db = null;
            return "Pet inserido com sucesso!";
        }
    }
?>