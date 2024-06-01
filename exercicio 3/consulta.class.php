<?php
    class Consulta
    {
        public function __construct(
            private string $data = "", 
            private string $horario = "",
            private array $medico = array(),
            private array $paciente = array(),
            private array $exames = array())
        {}

        public function getData()
        {
            return $this->data;
        }
        public function getHorario()
        {
            return $this->horario;
        }
        public function getMedico()
        {
            return $this->medico;
        }
        public function getPaciente()
        {
            return $this->paciente;
        }
        public function getExames()
        {
            return $this->exames;
        }

        public function setData($data)
        {
            $this->data = $data;
        }
        public function setHorario($horario)
        {
            $this->horario = $horario;
        }
        public function setMedico($medico)
        {
            $this->medico[] = $medico;
        }
        public function setPaciente($paciente)
        {
            $this->paciente[] = $paciente;
        }
        public function setExames($exames)
        {
            $this->exames[] = $exames;
        }
    }
?>