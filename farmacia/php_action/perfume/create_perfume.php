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
				width:120px;
				height: 30px;
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
	$codProduto = $_POST['codProduto'];
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$classificacao = $_POST['classificacao'];
	
	if (strlen($codProduto) ===0 or strlen($nome) ===0 or strlen($valor) ===0 or strlen($classificacao) ===0){
		echo "<h2> <br><br> <center> Erro, Não deixe os campos vazios! {$codProduto} {$nome} {$valor} {$classificacao}</center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../perfume/create_perfume.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO produto (codProduto, nome, valor) VALUES ('$codProduto', '$nome', '$valor')";
		if($connect->query($sql) === TRUE) {
			$sqlProd = "SELECT codProduto FROM produto where codProduto = {$codProduto}";
			$result = $connect->query($sqlProd);
				while ($row = $result->fetch_assoc()){
					$codProduto = $row['codProduto'];
				}
				$sqlR = "INSERT INTO perfume (classificacao, codProduto) VALUES ('$classificacao', '$codProduto')";
				if($connect->query($sqlR) === TRUE) {
					echo "<br><br><center><h3><p>Novo Perfume Inserido No Banco Com Sucesso!</p></h3></center>";
					echo "<br><center><a href='../../perfume/create_perfume.php'><button type='button'>Novo Perfume</button></a></center>";
					echo "<br><center><a href='../../perfume/crud_perfume.php'><button type='button'>Home</button></a></center>";
				}
		} else {
			$sql = "SELECT * FROM perfume WHERE codProduto
			 = {$codProduto}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, Perfume já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../perfume/create_perfume.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, Preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../perfume/create_perfume.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>