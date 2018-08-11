<!DOCTYPE html>
<html>
<head>
	<title>Futebol ONE</title>
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
if($_GET['codReceita']) {
	$codReceita = $_GET['codReceita'];
	$sql = "SELECT * FROM receita WHERE codReceita = {$codReceita}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();
?>
<br><br><br> &emsp; &emsp;
	<script>alert('Atenção ao DELETAR! Uma receita será apagada, automaticamente os dados que estiverem em uma tabela que possua restrição de integridade ON DELETE serão apagados.')</script>
<h2><center> Tem certeza de que gostaria de apagar? </center></h2>
<form action="../php_action/receita/remove_receita.php" method="post">
	<input type="hidden" name="codReceita" value="<?php echo $data['codReceita'] ?>" />
	<center><button type="submit">Apagar</button></center><br>
	<center><a href="delete_receita.php"><button type="button">Voltar</button></a></center>
</form>
</body>
</html>
<?php
}
?>