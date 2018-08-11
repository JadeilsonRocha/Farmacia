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
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$codEndereco = $_POST['codEndereco'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$fone = $_POST['fone'];
	
	$sqlEnd = "UPDATE endereco set rua='$rua', numero='$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep', fone='$fone' WHERE codEndereco in (SELECT codEndereco from cliente WHERE cpf = {$cpf})";
	$sql2 = "UPDATE cliente set nome = '$nome' where cpf = {$cpf}" ;
	if($connect->query($sqlEnd) === TRUE) {
		if($connect->query($sql2) === TRUE) {
			echo "<h2><br><br><center>Atualizado com Sucesso no Banco de Dados!<br><br></h2></center>";
			echo "<center><a href='../../cliente/update_cliente.php'><button type='button'>Voltar</button></a></center>";
		} else {
			echo "Error " . $sql2 . ' ' . $connect->connect_error;
		}
	}
	$connect->close();
}
?>
<div><br><br><br>
	<center><img src="../Thank_you.gif"></center>
</div>
</body>
</html>