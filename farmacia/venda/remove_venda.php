<!DOCTYPE html>
<html>
<head>
	<title>Farmacia Popular</title>
	<style type="text/css">
		body{
			background: #B0E0E6;
		}
			.position {
				width: 70%;
				margin: 20px 20px 20px 120px;
			}
			button{
				width:7%;
				height: 30px;
				font-size: 11pt;
				color: white;
				background: blue;
			}
		}
	</style>
</head>
<body>
<?php 

require_once '../php_action/db_connect.php';

if($_GET['codVenda']) {
	$codVenda = $_GET['codVenda'];
	$sql = "SELECT * FROM venda WHERE codVenda = {$codVenda}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();
?>
<br><br><br> &emsp; &emsp;
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/venda/remove_venda.php" method="post">
	<script>alert('Atenção, ao DELETAR uma Venda, serão apagados automaticamente os dados que estiverem em uma tabela que possua uma restrição de integridade ON DELETE. Nesse caso especifico há uma nenhuma restrição em outras tabelas!')</script>
	<input type="hidden" name="codVenda" value="<?php echo $data['codVenda'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_venda.php"><button type="button">Voltar</button></a></center>
</form>

</body>
</html>

<?php
}
?>