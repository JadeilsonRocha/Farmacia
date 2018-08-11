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
				width:145px;
				height: 35px;
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
	$codMedicamento = $_POST['codMedicamento'];
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$codFaixa = $_POST['codFaixa'];
	$cnpj = $_POST['cnpj'];
	
	if (strlen($codMedicamento) ===0 or strlen($nome) ===0 or strlen($valor) ===0 or strlen($codFaixa) ===0 or strlen($cnpj) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../medicamento/create_medicamento.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sql = "INSERT INTO produto (codProduto, nome, valor) VALUES ('$codMedicamento', '$nome', '$valor')";
		if($connect->query($sql) === TRUE) {
			$sqlProd = "SELECT codProduto FROM produto where codProduto = {$codMedicamento}";
			$result = $connect->query($sqlProd);
				while ($row = $result->fetch_assoc()){
					$codProduto = $row['codProduto'];
				}
				$sqlR = "INSERT INTO medicamento (classificacao, codProduto, fabricacao) VALUES ('$codFaixa', '$codProduto', '$cnpj')";
				if($connect->query($sqlR) === TRUE) {
					echo "<br><br><center><h3><p>Novo Medicamento Inserido No Banco Com Sucesso!</p></h3></center>";
					echo "<br><center><a href='../../medicamento/create_medicamento.php'><button type='button'>Novo Medicamento</button></a></center>";
					echo "<br><center><a href='../../medicamento/crud_medicamento.php'><button type='button'>Home</button></a></center>";
				} else {
					$sql = "DELETE FROM produto WHERE `produto`.`codProduto` = '{$codMedicamento}'";
					if($connect->query($sql) === TRUE) {
						echo "<br><br><center><h3><p>Não foi possível inserir! O código do LABORATÓRIO informado não consta em nosso Banco de Dados!</p></h3></center>";
						echo "<br><center><a href='../../medicamento/create_medicamento.php'><button type='button'>Novo Medicamento</button></a></center>";
						echo "<br><center><a href='../../medicamento/crud_medicamento.php'><button type='button'>Home</button></a></center>";
					}
				}
		} else {
			$sql = "SELECT * FROM medicamento WHERE codProduto
			 = {$codMedicamento}";
			$result = $connect->query($sql);
			if($result->num_rows > 0){
				echo "<h2> <br><br> <center> Erro, medicamento já existente! </center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../medicamento/create_medicamento.php'><button type='button'>Voltar</button></a>";
			}else {
				echo "<h2> <br><br><center> Erro, preencha todos os Campos Corretamente!</center></h2>";
				echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../medicamento/create_medicamento.php'><button type='button'>Voltar</button></a>";
			}
		}
	}
	$connect->close();
}
?>