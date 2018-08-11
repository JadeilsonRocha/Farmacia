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
<h1> <center>Nova Filial</center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/filial/create_filial.php" method="post">
		<table cellspacing="1" cellpadding="1">
			<tr>
				<th>Codigo Filial</th>
				<td><br><input type="number" name="codFilial" placeholder="Codigo Filial"></td>
			</tr>
			<tr>
				<th>Nome</th>
				<td><br><input type="text" name="nome" placeholder="Nome" /></td>
			</tr>		
			<tr>
				<th>Endereço</th>
				<td><br><input type="text" name="rua" placeholder="Av / Rua / Travessa" /></td>
			</tr>
			<tr>
				<th>Numero</th>
				<td><br><input type="text" name="numero" placeholder="Numero" /></td>
				
			</tr>
			<tr>
				<th>&nbsp; &nbsp;Complemento &nbsp; &nbsp; &nbsp; &nbsp; </th>
				<td><br><input type="text" name="complemento" placeholder="Complemento" /></td>
			</tr>

				<th>Bairro</th>
				<td><br><input type="text" name="bairro" placeholder="Bairro" /></td>
			</tr>
				<tr>
				<th>Cidade</th>
				<td><br><input type="text" name="cidade" placeholder="Cidade" /></td>
			</tr>
			<tr>
				<th>Estado</th>
				<td>
					<select class="w3-select" name="estado">
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
						<option value="SC">Santa Catarina (SC)/option>
						<option value="SP">São Paulo (SP)</option>
						<option value="SE">Sergipe (SE)</option>
						<option value="TO">Tocantins (TO)</option>
					</select>
				</td>
				<!--<td><br><input type="text" name="cod_equipe2" placeholder="Código da equipe 2" /></td>-->
			</tr>
			<tr>
				<th>&emsp; &emsp; CEP &emsp; &emsp;</th>
				<td><br><input type="number_format" name="cep" placeholder="Ex.: 00000 000" /></td>
			</tr>
			<tr>
				<th>Fone</th>
				<td><br><input type="number_format" name="fone" placeholder="Ex.: 00 0000 0000"></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
			<tr>
		</table>
	</form>
	<form method="post" action="../filial/crud_filial.php">
	&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>
</fieldset>

</body>
</html>

