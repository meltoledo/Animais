<?php

	class AnimalDAO
	{
		public function __construct(private $conexao){}
		
		public function buscar_todos_animais()
		{
			$sql = "SELECT idanimais, a.nome AS nome_a, raca, idade, p.nome AS nome_p FROM animais a INNER JOIN proprietario p ON (a.idproprietario=p.idproprietario)";
			
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
		
		public function listar_vacinas_animal($animal)
		{
			$sql = "SELECT * FROM vacinas v INNER JOIN animais a ON (v.idanimais=a.idanimais)  WHERE a.idanimais = ?";
			
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $animal->getIdanimais());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar vacinas";
			}
		}
		
		public function cadastrar($animal)
		{
			$sql = "INSERT INTO animais (idproprietario, raca, nome, idade, cor) VALUES (?,?,?,?,?)";
			
			try
			{
				$stm = $this->conexao->prepare($sql);
				$stm->bindValue(1, $animal->getProprietario()->getIdproprietario());
				$stm->bindValue(2, $animal->getRaca());
				$stm->bindValue(3, $animal->getNome());
				$stm->bindValue(4, $animal->getIdade());
				$stm->bindValue(5, $animal->getCor());
				$stm->execute();
				$this->conexao->null;
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				
				return "Problema ao cadastrar animal";
			}
		}
	}

?>