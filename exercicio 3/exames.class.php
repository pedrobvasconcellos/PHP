<?php
    class Exames
    {
        public function __construct(
            private string $nome = "", 
            private string $preparo = "")
        {}

        public function getNome()
        {
            return $this->nome;
        }
        public function getPreparo()
        {
            return $this->preparo;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setPreparo($preparo)
        {
            $this->preparo = $preparo;
        }
    }
?>