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
				width:150px;
				height: 30px;
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
	$cnpj = $_POST['cnpj'];
	$razaoSocial = $_POST['razaoSocial'];
	$email = $_POST['email'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$fone = $_POST['fone'];

	if (strlen($cnpj) ===0 or strlen($razaoSocial) ===0 or strlen($email) ===0 or strlen($rua) ===0 or strlen($bairro) ===0 or strlen($cidade) ===0 or strlen($cep) ===0 or strlen($fone) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../laboratorio/create_lab.php'><button type='button'>Voltar</button></a>";
	} else{	
		$sqlConsLab = "SELECT * from laboratorio where cnpj = {$cnpj}";
		$result2 = $connect->query($sqlConsLab);
		if($result2->num_rows > 0){
			echo "<h2> <br><br> <center> Erro, cnpj já existente! </center></h2>";
			echo "<br><br> <center> <a href='../../laboratorio/create_lab.php'><button type='button'>Voltar</button></a></center>";
		}else {
			$sqlInseEnd = "INSERT INTO endereco (rua, numero, complemento, bairro, cidade, estado, cep, fone) VALUES ('$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep', '$fone')";
			if($connect->query($sqlInseEnd) === TRUE) {
				$sqlEnd = "SELECT codEndereco FROM endereco ORDER BY codEndereco DESC LIMIT 1";
				$result = $connect->query($sqlEnd);
				while ($row = $result->fetch_assoc()){
					$codigo = $row['codEndereco'];
				}
				$sqlR = "INSERT INTO laboratorio (cnpj, razaoSocial, email, codEndereco) VALUES ('$cnpj', '$razaoSocial', '$email', '$codigo')";
				if($connect->query($sqlR) === TRUE) {
					echo "<br><br><center><h3><p>Novo Laboratório Inserido No Banco Com Sucesso!</p></h3></center>";
					echo "<br><center><a href='../../laboratorio/create_lab.php'><button type='button'>Novo Laboratório</button></a></center>";
					echo "<br><center><a href='../../laboratorio/crud_lab.php'><button type='button'>Home</button></a></center>";
				}
			}
		}
	}
	$connect->close();
}
?>