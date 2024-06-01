<?php
	class Proprietario extends Pessoa
	{
		public function __construct(private string $cpf = "", $nome = "", $telefone = "", private array $cachorro = array())
		{
			parent:: __construct($nome, $telefone);
		}
						
		public function getCpf()
		{
			return $this->cpf;
		}
		
		public function getCachorro()
		{
			return $this->cachorro;
		}
			
		public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}
		public function setCachorro($cachorro)
		{
			$this->cachorro[] = $cachorro;
		}
		
		
		
		
	}//fim da classe
?>