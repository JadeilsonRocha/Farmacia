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
			margin-top: 30px;
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
	</style>

</head>
<body>
<h1> <center>Menu: Cadastrar Medicamento</center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/medicamento/create_medicamento.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Código</th>
				<td><br><input type="number_format" name="codMedicamento" placeholder="Código do Medicamento. Ex. 7894561230000" /></td>
			</tr>		
			<tr>
				<th>Nome</th>
				<td><br><input type="text" name="nome" placeholder="Nome do Medicamento" /></td>
			</tr>
			<tr>
				<th>Valor</th>
				<td><br><input type="number_format" name="valor" placeholder="Ex. R$ 99.99" /></td>
			</tr>
				<th>&nbsp; &nbsp;Código da Faixa&nbsp; &nbsp; &nbsp; &nbsp;</th>
				<td><br><input type="text" name="codFaixa" placeholder="1 - Sem Faixa, 2 - Amarela, 3 - Vermelha ou 4 - Preta " /></td>
			</tr>
			<tr>
				<th>Laboratório</th>
				<td><br><input type="number_format" name="cnpj" placeholder="CNPJ do Laboratório. Ex. 33078528000132
				"> </td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	<form method="post" action="../medicamento/crud_medicamento.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

