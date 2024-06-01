<?php
    class Paciente extends Pessoa
    {
        public function __construct(
            private string $convenio = "",
            private string $nome = "", 
            private int $cpf = 0,
            private array $telefone = array())
        {
            parent:: __construct($nome, $cpf, $telefone);
        }

        public function getConvenio()
        {
            return $this->convenio;
        }

        public function setConvenio($convenio)
        {
            $this->convenio = $convenio;
        }
    }
?>