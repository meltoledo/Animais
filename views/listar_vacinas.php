<!doctype html>
<html>	
	<head>
		<meta charset="UTF-8">
		<title>Lista de Vacinas</title>
	</head>
	
	<body>
		<h1>Animais - <?php echo $nome; ?></h1>
		
		<table border="1">
			<tr>
				<th>Data da Aplicação</th>
				<th>Vacina</th>
				<?php
					foreach($retorno as $dado)
					{
						echo "<tr>
								<td>{$dado->data_aplicacao}</td>
								<td>{$dado->descritivo}</td>
							  </tr>";
					}
				?>
			</tr>
			
		</table>
	</body>
</html>