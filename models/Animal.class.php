<?php

	class Animal
	{
		public function __construct(private int $idanimais = 0, private $proprietario = null,
		                            private string $raca = "", private string $nome = "",
									private int $idade = 0, private string $cor = ""){}
		
		//gets
		
		public function getIdanimais()
		{
			return $this->idanimais;
		}
		
		public function getProprietario()
		{
			return $this->proprietario;
		}
		
		public function getRaca()
		{
			return $this->raca;
		}
		
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
		
		//sets
		
		public function setIdanimais($animais)
		{
			$this->animais = $animais;
		}
		
		public function setProprietario($proprietario)
		{
			$this->proprietario = $proprietario;
		}
		
		public function setRaca($raca)
		{
			$this->raca = $raca;
		}
		
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function setIdade($idade)
		{
			$this->idade = $idade;
		}
		
		public function setCor($cor)
		{
			$this->cor = $cor;
		}
	}

?>