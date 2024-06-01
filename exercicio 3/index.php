<?php
require_once "telefone.class.php";
require_once "pessoa.class.php";
require_once "pescricao.class.php";
require_once "paciente.class.php";
require_once "medico.class.php";
require_once "medicamento.class.php";
require_once "exames.class.php";
require_once "consulta.class.php";

$exames = new Exames("Hemograma", "não necessário");

$telefone1 = new Telefone(14, "99143-789");
$telefone2 = new Telefone(11, "99673-208");

$paciente = new Paciente("Sim", "Gabriel Campos", 68572494073, [$telefone1]);

$medico = new Medico("Clìnico Geral", "Jilmar Da Silva", 46185823080, [$telefone2]);

$consulta = new Consulta("13/04/2024", "19:00", [$medico], [$paciente], [$exames]);

$medicamento = new Medicamento ("Dipirona", "Tarja Vermelha", "Lorem ipsum dolor sit, amet consectetur adipisicing elit.");

$prescricao = new Pescricao("Tomar 1 por dia", [$medicamento], [$consulta]);


echo"<h1>Médico</h1>";
echo"Especialidade: {$prescricao->getConsulta()[0]->getMedico()[0]->getEspecialidade()}<br>";
echo"Nome: {$prescricao->getConsulta()[0]->getMedico()[0]->getNome()}<br>";
echo"CPF: {$prescricao->getConsulta()[0]->getMedico()[0]->getCpf()}<br>";
echo"DDD: {$prescricao->getConsulta()[0]->getMedico()[0]->getTelefone()[0]->getDdd()}<br>";
echo"Número: {$prescricao->getConsulta()[0]->getMedico()[0]->getTelefone()[0]->getNumero()}<br>";
echo"<h2>Paciente</h2>";
echo"Convenio: {$prescricao->getConsulta()[0]->getPaciente()[0]->getConvenio()}<br>";
echo"Nome: {$prescricao->getConsulta()[0]->getPaciente()[0]->getNome()}<br>";
echo"CPF: {$prescricao->getConsulta()[0]->getPaciente()[0]->getCpf()}<br>";
echo"DDD: {$prescricao->getConsulta()[0]->getPaciente()[0]->getTelefone()[0]->getDdd()}<br>";
echo"Número: {$prescricao->getConsulta()[0]->getPaciente()[0]->getTelefone()[0]->getNumero()}<br>";
echo"<h3>Consulta</h3>";
echo"Data: {$prescricao->getConsulta()[0]->getData()}<br>";
echo"Horário: {$prescricao->getConsulta()[0]->getHorario()}<br>";
echo"<h4>Exames</h4>";
echo"Nome: {$prescricao->getConsulta()[0]->getExames()[0]->getNome()}<br>";
echo"Preparo: {$prescricao->getConsulta()[0]->getExames()[0]->getPreparo()}<br>";
echo"<h5>Medicamento</h5>";
echo"Medicamento: {$prescricao->getMedicamento()[0]->getNome()}<br>";
echo"Tarja: {$prescricao->getMedicamento()[0]->getTarja()}<br>";
echo"Bula: {$prescricao->getMedicamento()[0]->getBula()}<br>";
echo"<h6>Pescrição</h6>";
echo"Pescrição: {$prescricao->getDescricao()}<br>";
?>

