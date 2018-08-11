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
	$codComer = $_POST['codComer'];
	$idFilial = $_POST['idFilial'];
	$idProduto = $_POST['idProduto'];

	if (strlen($idFilial) ===0 or strlen($idProduto) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../comercializacao/update_comercializacao.php'><button type='button'>Voltar</button></a>";
	} else{
		$sql = "SELECT * FROM comercializacao WHERE idFilial = {$idFilial} and idProduto = {$idProduto} ";
		$result = $connect->query($sql);
		if($result->num_rows > 0){
			echo "<h2> <br><br> <center> Erro, COMERCIALIZAÇÃO já existente no banco de dados! </center></h2>";
			echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../comercializacao/update_comercializacao.php'><button type='button'>Voltar</button></a>";
		} else {
			$sql1 = "SELECT * from filial as f, produto as p where f.codFilial = {$idFilial} and p.codProduto = {$idProduto}";
			$result = $connect->query($sql1);
			if($result->num_rows > 0){
				$sql = "UPDATE comercializacao SET idFilial= '$idFilial', idProduto= '$idProduto' WHERE codComer = '$codComer'";
				if($connect->query($sql) === TRUE) {
					echo "<h2><br><br><center>Atualizado com Sucesso no Banco de Dados!<br><br></h2></center>";
					echo "<center><a href='../../comercializacao/update_comercializacao.php'><button type='button'>Voltar</button></a></center>";
				} else {
					echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>"; # Você preencheu com dados que já estão inseridos na comercializacao!
					echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../comercializacao/update_comercializacao.php'><button type='button'>Voltar</button></a>";
				}
				$connect->close();
			}else {
				echo "<h2> <br><br><center> Erro! Preencha Os Campos Com Dados Já Inseridos No Banco De Dados!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../comercializacao/update_comercializacao.php'><button type='button'>Voltar</button></a>";
			}
		}
	}

}
?>
<div><br><br><br>
	<center><img src="../Thank_you.gif"></center>
</div>
</body>
</html>
