<?php 

require_once '../php_action/db_connect.php';

if($_GET['cnpj']) {
	$cnpj = $_GET['cnpj'];
	$sql = "SELECT * FROM laboratorio as l, endereco WHERE cnpj = '{$cnpj}' and l.codEndereco = endereco.codEndereco";
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
	<script>alert('Atenção ao ATUALIZAR, Um país será atualizado juntamente com os registros que tiverem uma restrição de integridade ON UPDATE. Nesse caso especifico há uma restrição na tabela PESSOA e EQUIPE!')</script>

<h1> <center> Atualizar Laboratorio  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/laboratorio/update_lab.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<td><br><input type="hidden" name="cnpj" value="<?php echo $data['cnpj'] ?>"/></td>
			</tr>		
			<tr>
				<th>Razão Social</th>
				<td><br><input type="text" name="razaoSocial" readonly="readonly" placeholder="Nome" value="<?php echo $data['razaoSocial'] ?>"/></td>
			</tr>
			<tr>
				<th>E-mail</th>
				<td><br><input type="text" name="email" placeholder="Ex.: contato@dominio.com"></td>
			</tr>
			<tr>
				<th>Endereço</th>
				<td><br><input type="text" name="rua" placeholder="Av. / Rua / Travessa" value="<?php echo $data['rua'] ?>"/></td>
				
			</tr>
			<tr>
				<th>&nbsp; &nbsp;Numero &nbsp; &nbsp; &nbsp; &nbsp; </th>
				<td><br><input type="text" name="numero" placeholder="Numero" value="<?php echo $data['numero'] ?>"/></td>
			</tr>

				<th>Complemento</th>
				<td><br><input type="text" name="complemento" placeholder="Complemento" value="<?php echo $data['complemento'] ?>"/></td>
			</tr>
			<tr>
				<th>Bairro</th>
				<td><br><input type="text" name="bairro" placeholder="Bairro" value="<?php echo $data['bairro'] ?>"/></td>
			</tr>
			<tr>
				<th>Cidade</th>
				<td><br><input type="text" name="cidade" placeholder="Cidade" value="<?php echo $data['cidade'] ?>"/></td>
			</tr>			
			<tr>
				<th>Estado</th>
				<td><br><input type="text" name="estado" placeholder="Ex.: PE" value="<?php echo $data['estado'] ?>"/></td>
			</tr>
			<tr>
				<th>CEP</th>
				<td><br><input type="text" name="cep" placeholder="Ex.: 00000 000" value="<?php echo $data['cep'] ?>"/></td>
			</tr>
			<tr>
				<th>Telefone</th>
				<td><br><input type="text" name="fone" placeholder="Ex.: 00 0000 0000" value="<?php echo $data['fone'] ?>"/></td>
			</tr>
			<tr><input type="hidden" name="codEndereco" readonly="readonly" value="<?php echo $data['codEndereco'] ?>"></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../laboratorio/update_lab.php">
	&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>