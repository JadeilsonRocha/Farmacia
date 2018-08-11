<!DOCTYPE html>
<html>
<head>
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
	<title>Farmácia Popular</title>
</head>
<body>

<?php 
require_once '../db_connect.php';

if($_POST) {
	$codProduto = $_POST['codProduto'];
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$classificacao = $_POST['classificacao'];
	$sql = "UPDATE produto SET nome= '$nome', valor= '$valor' WHERE codProduto = {$codProduto}";
	$sql2 = "UPDATE medicamento SET classificacao = '$classificacao'";
	if($connect->query($sql) === TRUE) {
		if($connect->query($sql2) === TRUE) {
			echo "<h2><br><br><center>Atualizado com Sucesso no Banco de Dados!<br><br></h2></center>";
			echo "<center><a href='../../medicamento/update_medicamento.php'><button type='button'>Voltar</button></a></center>";
		} else {
			echo "Error " . $sql . ' ' . $connect->connect_error;
		}
	}
	$connect->close();
}
?>
<div><br><br><br>
	<center><img src="../remedio.gif"></center>
</div>
</body>
</html>