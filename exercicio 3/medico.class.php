<?php
    class Medico extends Pessoa
    {
        public function __construct(
            private string $especialidade = "", 
            private string $nome = "", 
            private int $cpf = 0,
            private array $telefone = array())
        {
            parent:: __construct($nome, $cpf, $telefone);
        }

        public function getEspecialidade()
        {
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade)
        {
            $this->especialidade = $especialidade;
        }
    }
?>