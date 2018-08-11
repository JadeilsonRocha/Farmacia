<!DOCTYPE html>
<html>
<head>
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
			width: 70px;
			height: 28px;
			background: #5882FA;
			object-position:  center;
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
<?php 

require_once '../php_action/db_connect.php';

if($_GET['cnpj']) {
	$cnpj = $_GET['cnpj'];
	$sql = "SELECT * FROM laboratorio as lab, endereco WHERE lab.codEndereco = endereco.codEndereco and lab.cnpj = '{$cnpj}'";
	$result = $connect->query($sql) or die($connect->error);
	$data = $result->fetch_assoc();

	$connect->close();
?>
<br><br><br> &emsp; &emsp;
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/laboratorio/remove_lab.php" method="post">
<script>alert('Atenção, ao DELETAR um laboratorio será apagado automaticamente os dados que estiverem na tabela que possua uma restrição de integridade ON DELETE.')</script>
	<input type="hidden" name="cnpj" value="<?php echo $data['cnpj'] ?>" />
	<input type="hidden" name="codEndereco" value="<?php echo $data['codEndereco'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_lab.php"><button type="button">Voltar</button></a></center>
</form>

</body>
</html>

<?php
}
?>