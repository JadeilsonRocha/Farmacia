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
<h1> <center>Criar Venda</center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/venda/create_venda.php" method="post">
		<table cellspacing="1" cellpadding="1">
			<tr>
				<th>CPF</th>
				<td><br><input type="text" name="cpf" placeholder="Ex.: 000 000 000 00" /></td>
			</tr>		
			<tr>
				<th>&emsp; &emsp; Código do Produto &emsp; &emsp;</th>
				<td><br><input type="number" name="cod_produto" placeholder="Código do Produto" /></td>
			</tr>
			<tr>
				<th>Data da Venda</th>
				<td><br><input type="date" name="data_venda" placeholder="Data da Venda "></td>
			</tr>
			<tr>
				<th>Codigo Receita</th>
				<td><br><input type="number_format" name="idReceita" placeholder="Caso não possua, digite: 0"></td>
			</tr>
			<tr>
				<th>Forma de Pagamento</th>
				<td><select class="w3-select" name="pagamento">
						<option value="">Escolher Pagamento</option>
						<option value="À Vista">À Vista</option>
						<option value="Débito">Débito</option>
						<option value="Crédito 1x">Crédito 1x</option>
						<option value="Crédito 2x">Crédito 2x</option>
						<option value="Crédito 3x">Crédito 3x</option>
						<option value="Crédito 4x">Crédito 4x</option>
					</select>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
			<tr>
		</table>
	</form>
	<form method="post" action="../venda/crud_venda.php">
	<br><br> <center><input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</fieldset>

</body>
</html>

