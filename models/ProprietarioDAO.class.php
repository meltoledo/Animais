<?php

	class ProprietarioDAO
	{
		public function __construct(private $conexao){}
		
		public function buscar_proprietarios()
		{
			$sql = "SELECT * FROM proprietario";
			
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->execute();
				$this->conexao = null;
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOExceptiom $e)
			{
				return "Problema ao buscar os animais";
			}
		}
	}

?>