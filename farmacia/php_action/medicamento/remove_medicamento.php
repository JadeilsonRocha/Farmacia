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
	$sql = "DELETE FROM produto WHERE `produto`.`codProduto` = '{$codProduto}'";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Removido com Sucesso do Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../medicamento/delete_medicamento.php'><button type='button'>Voltar</button></a></center>";
	} else {
		echo "Error updating record : " . $connect->error;
	}
	$connect->close();
}

?>
<div><br><br><br>
	<center><img src="../lixo.gif"></center>
</div>
</body>
</html>