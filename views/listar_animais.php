<!doctype html>
<html>	
	<head>
		<meta charset="UTF-8">
		<title>Lista de Animais</title>
	</head>
	
	<body>
		<h1>Animais</h1>
		
		<table border="1">
			<tr>
				<th>Nome</th>
				<th>Raça</th>
				<th>Idade</th>
				<th>Proprietário</th>
				<th>Vacinas</th>
				<?php
					foreach($retorno as $dado)
					{
						echo "<tr>
								<td>{$dado->nome_a}</td>
								<td>{$dado->raca}</td>
								<td>{$dado->idade}</td>
								<td>{$dado->nome_p}</td>
								<td><a href='index.php?controle=animalController&metodo=listar_vacinas&id={$dado->idanimais}&nome={$dado->nome_a}'>Verificar</td>
							  </tr>";
					}
				?>
			</tr>
			
			<br><br>
		</table>
		
		<a href="index.php?controle=animalController&metodo=cadastrar_animal">Novo Animal</a>
	</body>
</html>