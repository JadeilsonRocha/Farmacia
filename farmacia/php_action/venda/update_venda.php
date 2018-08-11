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
	<title>Farmácia Popular</title>
</head>
<body>

<?php 
require_once '../db_connect.php';

if($_POST) {
	$codVenda = $_POST['codVenda'];
	$cpf = $_POST['cpf'];
	$idProduto = $_POST['idProduto'];
	$data_venda = $_POST['data_venda'];
	$idReceita = $_POST['idReceita'];
	$formaPag = $_POST['formaPag'];
	
	$sql = "UPDATE venda SET idProduto= '$idProduto', dataVenda= '$data_venda', idReceita = '$idReceita', formaPag = '$formaPag'  WHERE codVenda = {$codVenda}";
	if($connect->query($sql) === TRUE) {
		echo "<h2><br><br><center>Atualizado com Sucesso no Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../venda/update_venda.php'><button type='button'>Voltar</button></a></center>";
		echo "<br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
	} else {
		echo "<h2><br><br><center>Erro, dados Inválidos para serem inseridos no Banco de Dados!<br><br></h2></center>";
		echo "<center><a href='../../venda/update_venda.php'><button type='button'>Voltar</button></a></center>";
		echo "<br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
	}
	$connect->close();
}
?>
<div><br><br><br>
	<center><img src="../Thank_you.gif"></center>
</div>
</body>
</html>