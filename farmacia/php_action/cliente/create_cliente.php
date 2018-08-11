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
				width:130px;
				height: 35px;
				font-size: 11pt;
				color: white;
				background: blue;
			}
	</style>
	<title>Farmácia Popular</title>
</head>
<body>
<?php header("Content-type: text/html; charset=utf-8");

require_once '../db_connect.php';
  

if($_POST) {
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$fone = $_POST['fone'];
	
	if (strlen($cpf) ===0 or strlen($nome) ===0 or strlen($rua) ===0 or strlen($bairro) ===0 or strlen($cidade) ===0 or strlen($cep) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../cliente/create_cliente.php'><button type='button'>Voltar</button></a>";
	}else{
		$sqlConsCli = "SELECT * from cliente where cpf = {$cpf}";
		$result2 = $connect->query($sqlConsCli);
		if($result2->num_rows > 0){
			echo "<h2> <br><br> <center> Erro, cpf já existente! </center></h2>";
			echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../cliente/create_cliente.php'><button type='button'>Voltar</button></a>";
		}else {
			$sqlInseClie = "INSERT INTO endereco (rua, numero, complemento, bairro, cidade, estado, cep, fone) VALUES ('$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep', '$fone')";
			if($connect->query($sqlInseClie) === TRUE) {
				$sqlEnd = "SELECT codEndereco FROM endereco ORDER BY codEndereco DESC LIMIT 1";
				$result = $connect->query($sqlEnd);
				while ($row = $result->fetch_assoc()){
					$codigo = $row['codEndereco'];
				}
				$sqlR = "INSERT INTO cliente (cpf, nome, codEndereco) VALUES ('$cpf', '$nome', '$codigo')";
				if($connect->query($sqlR) === TRUE) {
					echo "<br><br><center><h3><p>Novo Cliente Inserido No Banco Com Sucesso!</p></h3></center>";
					echo "<br><center><a href='../../cliente/create_cliente.php'><button type='button'>Novo Cliente</button></a></center>";
					echo "<br><center><a href='../../cliente/crud_cliente.php'><button type='button'>Home</button></a></center>";

				}
			}
		}
	}
	$connect->close();
}
?>
<div><br><br><br>
	<center><img src="../criar.gif"></center>
</div>
</body>
</html>