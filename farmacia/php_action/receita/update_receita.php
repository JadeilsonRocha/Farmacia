<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background: #B0E0E6;
		}
			.position {
				width: 70%;
				margin: 80px 30px 30px 620px;
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
	<title>Farmacia Popular</title>
</head>
<body>

<?php 
require_once '../db_connect.php';

if($_POST) {
	$codReceita = $_POST['codReceita'];
	$nomePaciente = $_POST['nomePaciente'];
	$crm = $_POST['crm'];
	$estadoCRM = $_POST['estadoCRM'];
	$dataReceita = $_POST['dataReceita'];
	
	$sqlReceita = "UPDATE receita set nomePaciente = '$nomePaciente', crm = '$crm', estadoCRM = '$estadoCRM', dataReceita = '$dataReceita' WHERE codReceita = {$codReceita}";

	if($connect->query($sqlReceita) === TRUE) {
		echo "<h2><br><br><center>Atualizado com Sucesso no Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../receita/update_receita.php'><button type='button'>Voltar</button></a></center>";
	} else {
		echo "Error " . $sqlReceita. ' ' . $connect->connect_error;
	}
	$connect->close();
}
?>
<div><br><br><br>
	<center><img src="../Thank_you.gif"></center>
</div>
</body>
</html>