<?php 

require_once '../php_action/db_connect.php';

if($_GET['codReceita']) {
	$codReceita = $_GET['codReceita'];
	$sql = "SELECT * FROM receita WHERE codReceita = {$codReceita}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();
?>

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
<script>alert('Atenção ao ATUALIZAR! Uma receita será atualizada juntamente com os registros que tiverem uma restrição de integridade ON UPDATE!')</script>
<h1> <center> Atualizar Receita  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/receita/update_receita.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<td><br><input type="hidden" name="codReceita" value="<?php echo $data['codReceita'] ?>" /></td>
			</tr>
			<tr>
				<th>Nome do Paciente</th>
				<td><br><input type="number_format" name="nomePaciente" placeholder="Nome do Paciente" value="<?php echo $data['nomePaciente'] ?>"/></td>
			</tr>		
			<tr>
				<th>CRM</th>
				<td><br><input type="number_format" name="crm" placeholder="CRM" value="<?php echo $data['crm'] ?>" /></td>
			</tr>
			<tr>
				<th>Estado</th>
				<td><select class="w3-select" name="estadoCRM">
						<option value="<?php echo $data['estadoCRM'] ?>"><?php echo $data['estadoCRM'] ?></option>
						<option value=""></option>
						<option value="AC"<?php echo $data['estadoCRM'] ?>>Acre (AC)</option>
						<option value="AL"<?php echo $data['estadoCRM'] ?>>Alagoas (AL)</option>
						<option value="AP"<?php echo $data['estadoCRM'] ?>>Amapá (AP)</option>
						<option value="AM"<?php echo $data['estadoCRM'] ?>>Amazonas (AM)</option>
						<option value="BA"<?php echo $data['estadoCRM'] ?>>Bahia (BA)</option>
						<option value="CE"<?php echo $data['estadoCRM'] ?>>Ceará (CE)</option>
						<option value="DF"<?php echo $data['estadoCRM'] ?>>Distrito Federal (DF)</option>
						<option value="ES"<?php echo $data['estadoCRM'] ?>>Espírito Santo (ES)</option>
						<option value="GO"<?php echo $data['estadoCRM'] ?>>Goiás (GO)</option>
						<option value="MA"<?php echo $data['estadoCRM'] ?>>Maranhão (MA)</option>
						<option value="MG"<?php echo $data['estadoCRM'] ?>>Mato Grosso (MG)</option>
						<option value="MS"<?php echo $data['estadoCRM'] ?>>Mato Grosso do Sul (MS)</option>
						<option value="MG"<?php echo $data['estadoCRM'] ?>>Minas Gerais (MG)</option>
						<option value="PA"<?php echo $data['estadoCRM'] ?>>Pará (PA)</option>
						<option value="PB"<?php echo $data['estadoCRM'] ?>>Paraíba (PB)</option>
						<option value="PR"<?php echo $data['estadoCRM'] ?>>Paraná (PR)</option>
						<option value="PE"<?php echo $data['estadoCRM'] ?>>Pernambuco (PE)</option>
						<option value="PI"<?php echo $data['estadoCRM'] ?>>Piauí (PI)</option>
						<option value="RJ"<?php echo $data['estadoCRM'] ?>>Rio de Janeiro (RJ)</option>
						<option value="RN"<?php echo $data['estadoCRM'] ?>>Rio Grande do Norte (RN)</option>
						<option value="RS"<?php echo $data['estadoCRM'] ?>>Rio Grande do Sul (RS)</option>
						<option value="RO"<?php echo $data['estadoCRM'] ?>>Rondônia (RO)</option>
						<option value="RR"<?php echo $data['estadoCRM'] ?>>Roraima (RR)</option>
						<option value="SC"<?php echo $data['estadoCRM'] ?>>Santa Catarina (SC)</option>
						<option value="SP"<?php echo $data['estadoCRM'] ?>>São Paulo (SP)</option>
						<option value="SE"<?php echo $data['estadoCRM'] ?>>Sergipe (SE)</option>
						<option value="TO"<?php echo $data['estadoCRM'] ?>>Tocantins (TO)</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Data da Receita<br> (YYYY-MM-DD)</th>
				<td><br><input type="text" name="dataReceita" placeholder="Exemplo: 2000-12-31" value="<?php echo $data['dataReceita'] ?>"></td>		
			</tr>		
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../receita/update_receita.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>