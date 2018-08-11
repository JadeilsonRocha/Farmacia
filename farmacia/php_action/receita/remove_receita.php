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
	$codReceita = $_POST['codReceita'];

	$sql0 = "DELETE FROM receita ";
	$sql = "DELETE FROM receita WHERE `receita`.`codReceita` = '{$codReceita}'";
	$sql2 = "DELETE FROM produto WHERE `produto`.`codProduto` = '{$codReceita}'";
	echo "$codReceita";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Removido com Sucesso do Banco de Dados!<br><br></h2></center>";
		echo "<br><br><center><a href='../../receita/delete_receita.php'><button type='button'>Voltar</button></a></center>";
	} else {
		echo "<h2><br><br><center>Não foi possível apagar a receita do Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../receita/delete_receita.php'><button type='button'>Voltar</button></a></center>";
		
	}

	$connect->close();
}

?>
<div><br><br><br>
	<center><img src="../lixo.gif"></center>
</div>
</body>
</html>