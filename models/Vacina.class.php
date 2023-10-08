<?php

	class Vacina
	{
		public function __construct(private int $idvacinas = 0, private $animal = null, private string $data_aplicacao = "", private string $descritivo = ""){}
		
		// gets
		
		public function getIdvacinas()
		{
			return $this->vacinas;
		}
		
		public function getAnimal()
		{
			return $this->animal;
		}
		
		public function getData_aplicacao()
		{
			return $this->data_aplicacao;
		}
		
		public function getDescritivo()
		{
			return $this->descritivo;
		}
		
		//sets
		
		public function setIdvacinas($idvacinas)
		{
			$this->idvacinas = $idvacinas;
		}
		
		public function setAnimal($animal)
		{
			$this->animal = $animais;
		}
		
		public function setData_aplicacao($data_aplicacao)
		{
			$this->data_aplicacao = $data_aplicacao;
		}
		
		public function setDescritivo($descritivo)
		{
			$this->descritivo = $descritivo;
		}
	}

?>