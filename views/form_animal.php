<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Novo Animal</title>
	</head>
	
	<body>
		<h1>Novo Animal</h1>
		
		<form action="#" method="post">
			<label>Proprietário: </label>
			<select name="proprietario">
				<option value="0">Selecione um proprietário</option>
				<?php
						if(is_array($retorno))
						{
							foreach($retorno as $dado)
							{
								echo "<option value='{$dado->idproprietario}'>{$dado->nome}</option>";
							}
						}
					?>
			</select> <br><br>
			
			<label>Raça: </label>
			<input type="text" name="raca"> <br><br>
			
			<label>Nome: </label>
			<input type="text" name="nome"> <br><br>
			
			<label>Idade (anos): </label>
			<input type="number" name="idade"> <br><br>
			
			<label>Cor: </label>
			<input type="text" name="cor"> <br><br>
			
			<input type="submit" value="cadastrar">
		</form>
	</body>
</html>