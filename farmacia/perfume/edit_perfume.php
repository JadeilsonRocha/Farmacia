<?php 

require_once '../php_action/db_connect.php';

if($_GET['codProduto']) {
	$codProduto = $_GET['codProduto'];
	$sql = "SELECT * FROM produto, perfume WHERE produto.codProduto = {$codProduto} and perfume.codProduto = {$codProduto}";
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
<script>alert('Atenção ao ATUALIZAR! Um perfume será atualizado juntamente com os registros que tiverem uma restrição de integridade ON UPDATE.')</script>
<h1> <center> Alterar Perfurme </center> </h1>
<fieldset>
	<legend>Preencha os Campos</legend>
	<form action="../php_action/perfume/update_perfume.php" method="post">
		<table cellspacing="2" cellpadding="3">
			<tr>
				<th></th>
				<td><br><input type="hidden" name="codProduto" placeholder="" value="<?php echo $data['codProduto'] ?>" /></td>
			</tr>		
			<tr>
				<th>Nome</th>
				<td><br><input type="text" name="nome" placeholder="Nome" value="<?php echo $data['nome'] ?>" /></td>
			</tr>
			<tr>
				<th>Valor</th>
				<td><br><input type="number_format" name="valor" placeholder="R$" value="<?php echo $data['valor'] ?>" /></td>
			</tr>
			<tr>
				<th>Classificação</th>
				<td><select class="ls-select" name="classificacao" placeholder="Selecione uma opção">
						<!--<option value="">Escolha uma opção</option>-->
						<option value="PARFUM" <?php echo $data['classificacao'] ?>>PARFUM </option>
						<option value="EAU DE PARFUM" <?php echo $data['classificacao'] ?>>EAU DE PARFUM</option>
						<option value="EAU DE TOILETTE"<?php echo $data['classificacao'] ?>>EAU DE TOILETTE</option>
						<option value="EAU DE COLOGNE "<?php echo $data['classificacao'] ?>>EAU DE COLOGNE </option>
					</select>
				</td>
			</tr>
			<tr>
				<td><br><button type="submit">&nbsp; Salvar Alterações</button></td>
			</tr>
		</table>
	</form>
	</form>
	<form method="post" action="../perfume/update_perfume.php">
	<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65">
	</form>

</fieldset>

</body>
</html>

<?php
}
?>