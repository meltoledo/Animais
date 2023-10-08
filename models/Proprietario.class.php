<?php

	class Proprietario
	{
		public function __construct(private int $idproprietario = 0, private string $nome = "", private string $celular = ""){}
		
		//gets
		
		public function getIdproprietario()
		{
			return $this->idproprietario;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getCelular()
		{
			return $this->celular;
		}
		
		//sets
		
		public function setIdproprietario($idproprietario)
		{
			$this->idproprietario = $idproprietario;
		}
		
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function setCelular($celular)
		{
			$this->celular = $celular;
		}
	}

?>