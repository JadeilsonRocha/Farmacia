<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Farmácia Popular</title>

	<style type="text/css">
		body{
			background: #B0E0E6;
		}
		fieldset {
			margin: 35px;
			margin-top: 10px;
			width: 93%;
			height: 90%;
		}

		table tr th {
			align: right;
			valiagn: right;
			width: 220px;
			padding-top: 15px;
			margin-top: 0px;
		}
		table td input {
			width: 325px;
			height: 17px;
		}
		button{
				width:85%;
				height: 30px;
				font-size: 11pt;
				color: white;
				background: blue;
		}
		legend {
			color: blue;
			font-size: 16pt;
			font-weight: bold;
		}
		select {
			width: 328px;
			height: 25px;
			margin-top: 10px;
		}
	</style>

</head>
<body>
<h1> <center> Adicionar Perfume  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/perfume/create_perfume.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Código</th>
				<td><br><input type="text" name="codProduto" placeholder="Ex. 7894561230000" /></td>
			</tr>		
			<tr>
				<th>&nbsp;Nome</th>
				<td><br><input type="text" name="nome" placeholder="Nome" /></td>
			</tr>
			<tr>
				<th>&nbsp;Valor</th>
				<td><br><input type="number_format" name="valor" placeholder="Valor" /></td>
			</tr>
			<tr>
				<th>Classificação</th>
				<td><select class="w3-select" name="classificacao">
						<option value="">Escolha uma opção</option>
						<option value="PARFUM">PARFUM </option>
						<option value="EAU DE PARFUM">EAU DE PARFUM</option>
						<option value="EAU DE TOILETTE">EAU DE TOILETTE</option>
						<option value="EAU DE COLOGNE ">EAU DE COLOGNE </option>
					</select>
				</td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	<form method="post" action="../perfume/crud_perfume.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

