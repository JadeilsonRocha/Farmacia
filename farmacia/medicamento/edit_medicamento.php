<?php 

require_once '../php_action/db_connect.php';

if($_GET['codProduto']) {
	$codProduto = $_GET['codProduto'];
	$sql = "SELECT * FROM produto, medicamento WHERE produto.codProduto = '{$codProduto}' and medicamento.codProduto = '{$codProduto}' ";
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
<script>alert('Atenção ao ATUALIZAR! Um Medicamento será atualizado juntamente com os registros que tiverem uma restrição de integridade ON UPDATE.')</script>

<h1> <center> Atualizar Medicamento  </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/medicamento/update_medicamento.php" method="post">
		<table cellspacing="2" cellpadding="3">
			</tr>
				<td><input type="hidden" readonly="readonly" name="codMedicamento" value="<?php echo $data['codMedicamento'] ?>"/></td>
			</tr>
			</tr>
				<td><input type="hidden" name="codProduto" readonly="readonly" value="<?php echo $data['codProduto'] ?>"/></td>
			</tr>		
			<tr>
				<th>Nome</th>
				<td><br><input type="text" name="nome" placeholder="Nome do Medicamento" value="<?php echo $data['nome'] ?>"/></td>
			</tr>
			<tr>
				<th>Valor</th>
				<td><br><input type="number_format" name="valor" placeholder="Ex. R$ 99.99" value="<?php echo $data['valor'] ?>"/></td>
			</tr>
			<tr>
				<th>Código da Faixa</th>
				<td><br><input type="text" name="classificacao" placeholder="1 - Sem Faixa, 2 - Amarela, 3 - Vermelha ou 4 - Preta " value="<?php echo $data['classificacao'] ?>"/></td>
			</tr>
			<tr>
				<th>Laboratório</th>
				<td><br><input type="number_format" name="cnpj" readonly="readonly" placeholder="CNPJ do Laboratório. Ex. 33078528000132" value="<?php echo $data['fabricacao'] ?>"/></td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../medicamento/update_medicamento.php">
	&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>