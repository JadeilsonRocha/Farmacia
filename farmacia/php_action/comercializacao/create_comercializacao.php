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
				width: 140px;
				height: 50px;
				font-size: 11pt;
				color: white;
				background: blue;
			}
	</style>
	<title>Farmácia Popular</title>
</head>
<body>
<?php 

require_once '../db_connect.php';

if($_POST) {
	$idFilial = $_POST['idFilial'];
	$idProduto = $_POST['idProduto'];

	if (strlen($idFilial) ===0 or strlen($idProduto) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../comercializacao/create_comercializacao.php'><button type='button'>Voltar</button></a>";
	} else{
		$sql = "SELECT * FROM comercializacao WHERE idFilial = {$idFilial} and idProduto = {$idProduto} ";
		$result = $connect->query($sql);
		if($result->num_rows > 0){
			echo "<h2> <br><br> <center> Erro, COMERCIALIZAÇÃO já existente no banco de dados! </center></h2>";
			echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../comercializacao/create_comercializacao.php'><button type='button'>Voltar</button></a>";
		} else {
			$sql1 = "SELECT * from filial as f, produto as p where f.codFilial = {$idFilial} and p.codProduto = {$idProduto}";
			$result = $connect->query($sql1);
			if($result->num_rows > 0){
				$sql = "INSERT INTO comercializacao (idFilial, idProduto) VALUES ('$idFilial', '$idProduto')";
				if($connect->query($sql) === TRUE) {
					echo "<br><br><center><h3><p>Nova comercializacao Inserida No Banco Com Sucesso!</p></h3></center>";
					echo "<br><center><a href='../../comercializacao/create_comercializacao.php'><button type='button'>Nova Comercializacao</button></a></center>";
					echo "<br><center><a href='../../comercializacao/crud_comercializacao.php'><button type='button'>Home</button></a></center>";
				}else {
					echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
					echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../comercializacao/create_comercializacao.php'><button type='button'>Voltar</button></a>";
				}
			} else {
				echo "<h2> <br><br><center> Erro! Preencha Os Campos Com Dados Já Inseridos No Banco De Dados!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../comercializacao/create_comercializacao.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>