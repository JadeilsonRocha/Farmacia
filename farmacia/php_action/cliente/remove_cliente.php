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
	$cpf = $_POST['cpf'];
	$codEndereco = $_POST['codEndereco'];
	$sql = "DELETE FROM endereco WHERE endereco.codEndereco = {$codEndereco} ";
	$sql2 = "DELETE FROM cliente WHERE cliente.cpf = {$cpf} ";
	if($connect->query($sql) === TRUE) {
		if($connect->query($sql2) === TRUE) {
			echo "<h2><br><br><center>Removido com Sucesso do Banco de Dados!<br><br></h2></center>";
			echo "<center><a href='../../cliente/delete_cliente.php'><button type='button'>Voltar</button></a></center>";
		} else {
			echo "Error updating record : " . $connect->error;
		}
	}
	$connect->close();
}

?>
<div><br><br><br>
	<center><img src="../lixo.gif"></center>
</div>
</body>
</html>