<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Farmácia Popular</title>

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
<h1> <center>Cadastro de Receita</center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/receita/create_receita.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th>Nome do Paciente</th>
				<td><br><input type="text" name="nomePaciente" placeholder="Nome do Paciente" /></td>
			</tr>
			<tr>
				<th>CPF do Paciente</th>
				<td><br><input type="text" name="cpfPaciente" placeholder="CPF do Paciente" /></td>
			</tr>		
			<tr>
				<th>&emsp; &emsp; CRM &emsp; &emsp;</th>
				<td><br><input type="text" name="crm" placeholder="CRM" /></td>
			</tr>
			<tr>
				<th>Estado</th>
				<td><select class="w3-select" name="estadoCRM">
						<option value="">Escolher estado</option>
						<option value="AC">Acre (AC)</option>
						<option value="AL">Alagoas (AL)</option>
						<option value="AP">Amapá (AP)</option>
						<option value="AM">Amazonas (AM)</option>
						<option value="BA">Bahia (BA)</option>
						<option value="CE">Ceará (CE)</option>
						<option value="DF">Distrito Federal (DF)</option>
						<option value="ES">Espírito Santo (ES)</option>
						<option value="GO">Goiás (GO)</option>
						<option value="MA">Maranhão (MA)</option>
						<option value="MG">Mato Grosso (MG)</option>
						<option value="MS">Mato Grosso do Sul (MS)</option>
						<option value="MG">Minas Gerais (MG)</option>
						<option value="PA">Pará (PA)</option>
						<option value="PB">Paraíba (PB)</option>
						<option value="PR">Paraná (PR)</option>
						<option value="PE">Pernambuco (PE)</option>
						<option value="PI">Piauí (PI)</option>
						<option value="RJ">Rio de Janeiro (RJ)</option>
						<option value="RN">Rio Grande do Norte (RN)</option>
						<option value="RS">Rio Grande do Sul (RS)</option>
						<option value="RO">Rondônia (RO)</option>
						<option value="RR">Roraima (RR)</option>
						<option value="SC">Santa Catarina (SC)</option>
						<option value="SP">São Paulo (SP)</option>
						<option value="SE">Sergipe (SE)</option>
						<option value="TO">Tocantins (TO)</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Data da Receita</th>
				<td><br><input type="date" name="dataReceita" placeholder="Data da Receita"></td>		
			</tr>		
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	<form method="post" action="../receita/crud_receita.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

