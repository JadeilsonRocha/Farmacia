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
			margin: 30px;
			margin-top: 15px;
			width: 90%;
			height: 90%;
		}

		table tr th {
			align: right;
			valiagn: right;
			width: 180px;
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
<h1> <center>Adicionar Comercialização</center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/comercializacao/create_comercializacao.php" method="post">
		<table cellspacing="1" cellpadding="1">
			<tr>
				<th>Codigo Filial</th>
				<td><br><input type="number" name="idFilial" placeholder="Codigo da Filial"></td>
			</tr>
			<tr>
				<th>Código Produto</th>
				<td><br><input type="text" name="idProduto" placeholder="Código do Produto" /></td>
			</tr>		
			<tr>
				<td><br><button type="submit">&nbsp; Salvar</button></td>
			</tr>
			<tr>
		</table>
	</form>
	<form method="post" action="../comercializacao/crud_comercializacao.php">
	&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

