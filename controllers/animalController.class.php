<?php
	
	require_once "models/Conexao.class.php";
	require_once "models/AnimalDAO.class.php";
	require_once "models/ProprietarioDAO.class.php";
	require_once "models/Animal.class.php";
	require_once "models/Proprietario.class.php";

	class animalController
	{
		private $parm;
		public function __construct()
		{
			$this->parm = Conexao::getInstancia();
		}
		
		public function listar()
		{
			$animalDAO = new AnimalDAO($this->parm);
			$retorno = $animalDAO->buscar_todos_animais();
			
			if(!is_array($retorno))
			{
				echo $retorno;
			}
			else
			{
				require_once "views/listar_animais.php";
			}
		}
		
		public function listar_vacinas()
		{
			if(isset($_GET["id"]))
			{
				$animal = new Animal(idanimais:$_GET["id"]);
				
				$animalDAO = new AnimalDAO($this->parm);
				$retorno = $animalDAO->listar_vacinas_animal($animal);
				
				$id = $_GET["id"];
				$nome = $_GET["nome"];
				
				if(!is_array($retorno))
				{
					echo $retorno;
				}
				else
				{
					require_once "views/listar_vacinas.php";
				}
			}
		}
		
		public function cadastrar_animal()
		{
			$msg = "";
			
			$propDAO = new ProprietarioDAO($this->parm);
			$retorno = $propDAO->buscar_proprietarios();
			
			require_once "views/form_animal.php";
			
			if(empty($_POST["raca"]))
			{
				$msg = "Preencha a raça";
			}
			else if(empty($_POST["nome"]))
			{
				$msg = "Preencha o nome";
			}
			else if(empty($_POST["idade"]) || $_POST["idade"] <= 0)
			{
				$msg = "Preencha a idade";
			}
			else if(empty($_POST["cor"]))
			{
				$msg  = "Preencha a cor";
			}
			else
			{
				$prop = new Proprietario($_POST["proprietario"]);
				$animal = new Animal(proprietario:$prop, raca:$_POST["raca"],nome:$_POST["nome"], idade:$_POST["idade"], cor:$_POST["cor"]);
				
				$animalDAO = new AnimalDAO($this->parm);
				$animalDAO->cadastrar($animal);
				
				header("location:index.php?controle=animalController&metodo=listar");
			}
		}
	}

?>