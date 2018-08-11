<?php 

require_once '../php_action/db_connect.php';

if($_GET['codVenda']) {
	$codVenda = $_GET['codVenda'];
	$sql = "SELECT * FROM venda WHERE codVenda = '$codVenda'";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$originalDate = $data['dataVenda'];
	$newDate = date("d-m-Y", strtotime($originalDate));
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
<script>alert('Atenção ao ATUALIZAR! Uma Venda será atualizada juntamente com os registros que tiverem uma restrição de integridade ON UPDATE.')</script>
<h1> <center>Atualizar Venda</center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/venda/update_venda.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<td><br><input type="hidden" name="codVenda" placeholder="Código do jogador" value="<?php echo $data['codVenda'] ?>"/></td>
			<tr>
				<td><br><input type="hidden" readonly="readonly" name="cpf" value="<?php echo $data['cpfCliente'] ?>" /></td>
			</tr>		
			<tr>
				<th>Código do Produto</th>
				<td><br><input type="text" name="idProduto" value="<?php echo $data['idProduto'] ?>" /></td>
			</tr>
			<tr>
				<th>Data da Venda<br> (YYYY-MM-DD)</th>
				<td><br><input type="text" name="data_venda" placeholder="Exemplo: 2000-12-31" value="<?php echo $data['dataVenda'] ?>" "></td>
			</tr>
			<tr>
				<th>Codigo Receita</th>
				<td><br><input type="number_format" name="idReceita" value="<?php echo $data['idReceita'] ?>"></td>
			</tr>
			<tr>
				<th>Forma de Pagamento *</th>
				<td><select class="w3-select" name="formaPag">
						<option value="<?php echo $data['formaPag'] ?>"><?php echo $data['formaPag'] ?></option>
						<option value=""></option>
						<option value="À Vista"<?php echo $data['formaPag'] ?>>À Vista</option>
						<option value="Débito"<?php echo $data['formaPag'] ?>>Débito</option>
						<option value="Crédito 1x"<?php echo $data['formaPag'] ?>>Crédito 1x</option>
						<option value="Crédito 2x"<?php echo $data['formaPag'] ?>>Crédito 2x</option>
						<option value="Crédito 3x"<?php echo $data['formaPag'] ?>>Crédito 3x</option>
						<option value="Crédito 4x"<?php echo $data['formaPag'] ?>>Crédito 4x</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../venda/update_venda.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>