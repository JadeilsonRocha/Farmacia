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
	$codFilial = $_POST['codFilial'];
	$nome = $_POST['nome'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$fone = $_POST['fone'];
	
	if (strlen($codFilial) ===0 or strlen($nome) ===0 or strlen($rua) ===0 or strlen($bairro) ===0 or strlen($cidade) ===0 or strlen($estado) ===0 or strlen($cep) ===0 or strlen($fone) ===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../filial/create_filial.php'><button type='button'>Voltar</button></a>";
	} else{
		$sqlFil = "SELECT * FROM filial WHERE codFilial = {$codFilial}";
		$result = $connect->query($sqlFil);
		if($result->num_rows > 0){
			echo "<h2> <br><br> <center> Erro, filial já existente! </center></h2>";
			echo "<br><br> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <a href='../../filial/create_filial.php'><button type='button'>Voltar</button></a>";
		}else{
			$sqlEnd = "INSERT INTO endereco (rua, numero, complemento, bairro, cidade, estado, cep, fone) VALUES ('$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep', '$fone')";

			if ($connect->query($sqlEnd)===TRUE) {
				$sqlEnd = "SELECT codEndereco FROM endereco ORDER BY codEndereco DESC LIMIT 1";
				$result = $connect->query($sqlEnd);
					while ($row = $result->fetch_assoc()){
						$codigo = $row['codEndereco'];
				}
				$sqlFil = "INSERT INTO filial(codFilial, nome, codEndereco) VALUES ('$codFilial','$nome', '$codigo')";
				if($connect->query($sqlFil) === TRUE) {
					echo "<br><br><center><h3><p>Nova Filial Inserida No Banco Com Sucesso!</p></h3></center>";
					echo "<br><center><a href='../../filial/create_filial.php'><button type='button'>Nova Filial</button></a></center>";
					echo "<br><center><a href='../../filial/crud_filial.php'><button type='button'>Home</button></a></center>";
				}
			}
		}
	}
	$connect->close();
}
?>