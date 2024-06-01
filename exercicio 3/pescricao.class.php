<?php
    class Pescricao
    {
        public function __construct(
            private string $descricao = "",
            private array $medicamento = array(),
            private array $consulta = array())
        {}

        public function getDescricao()
        {
            return $this->descricao;
        }
        public function getMedicamento()
        {
            return $this->medicamento;
        }
        public function getConsulta()
        {
            return $this->consulta;
        }

        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }
        public function setMedicamento($medicamento)
        {
            $this->medicamento[] = $medicamento;
        }
        public function setConsulta($consulta)
        {
            $this->consulta[] = $consulta;
        }
    }
?>