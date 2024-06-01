<?php
    class Pessoa
    {
        public function __construct(
            private string $nome = "", 
            private int $cpf = 0,
            private array $telefone = array())
        {}

        public function getNome()
        {
            return $this->nome;
        }
        public function getCpf()
        {
            return $this->cpf;
        }
        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
        public function setTelefone($telefone)
        {
            $this->telefone[] = $telefone;
        }
    }
?>