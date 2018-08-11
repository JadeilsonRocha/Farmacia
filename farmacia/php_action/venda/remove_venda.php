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
	<title>Farmacia Popular</title>
</head>
<body>

<?php 

require_once '../db_connect.php';

if($_POST) {
	$codVenda = $_POST['codVenda'];

	$sql = "DELETE FROM venda WHERE `venda`.`codVenda` = {$codVenda}";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Removida com Sucesso do Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../venda/delete_venda.php'><button type='button'>Voltar</button></a></center>";
		echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
	} else {
		echo "<script>alert('Error não será possível apagar essa venda, pois ela tem uma relação com outras tabelas!');</script>";
		echo "<center><a href='../../venda/delete_venda.php'><button type='button'>Sair</button></a></center>";
		# "Error não será possível apagar essa venda, pois ele tem uma relação com outras tabelas!" . $connect->error;
	}

	$connect->close();
}

?>
<div><br><br><br>
	<center><img src="../lixo.gif"></center>
</div>
</body>
</html>