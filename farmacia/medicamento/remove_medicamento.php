<!DOCTYPE html>
<html>
<head>
	<title>Futebol ONE</title>
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

if($_GET['codProduto']) {
	$codProduto = $_GET['codProduto'];
	$sql = "SELECT * FROM produto WHERE codProduto = '{$codProduto}' ";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();
?>
<br><br><br> &emsp; &emsp;
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/medicamento/remove_medicamento.php" method="post">
	<script>alert('Atenção, ao DELETAR um medicamento, os dados que estiverem em uma tabela cujo tenha uma restrição de integridade ON DELETE serão apagados automaticamente. Há uma restrição de integridade na tabela Comercialização!')</script>
	<input type="hidden" name="codProduto" value="<?php echo $data['codProduto'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_medicamento.php"><button type="button">Voltar</button></a></center>
</form>

</body>
</html>

<?php
}
?>