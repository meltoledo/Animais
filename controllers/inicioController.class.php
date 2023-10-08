<?php
	
	require_once "models/componente.php";
	require_once "models/ul.class.php";
	require_once "models/li.class.php";
	require_once "models/a.class.php";

	class inicioController
	{
		public function inicio()
		{
			$ul = new ul();
			$ul->setElemento(new li(new a("index.php?controle=animalController&metodo=listar", "Animais")));
			
			require_once "views/menu.php";
		}
	}

?>