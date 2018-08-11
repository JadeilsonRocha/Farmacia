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
	$nomePaciente = $_POST['nomePaciente'];
	$cpfPaciente = $_POST['cpfPaciente'];
	$crm = $_POST['crm'];
	$estadoCRM = $_POST['estadoCRM'];
	$dataReceita = $_POST['dataReceita'];
	
	if (strlen($cpfPaciente)===0 or strlen($crm)===0 or strlen($estadoCRM)===0 or strlen($dataReceita
	)===0){
		echo "<h2> <br><br> <center> Erro, Não deixe os campos vazios! </center></h2>";
		echo "<br><br><center><a href='../../receita/create_receita.php'><button type='button'>Voltar</button></a></center>";
	} else{	
		$sql = "INSERT INTO receita (nomePaciente, cpfPaciente, crm, estadoCRM, dataReceita ) VALUES ('$nomePaciente', '$cpfPaciente' , '$crm', '$estadoCRM', '$dataReceita' )";
		if($connect->query($sql) === TRUE) {
			$sql = "SELECT codReceita FROM receita ORDER BY codReceita DESC LIMIT 1";
			$result = $connect->query($sql);
			while ($row = $result->fetch_assoc()){
				$codigo = $row['codReceita'];
			}
			echo "$codigo";
			echo "$cpfPaciente";
			echo "$nomePaciente";
			$sql2 = "UPDATE cliente set receita = '$codigo' where cpf = {$cpfPaciente}";
			if($connect->query($sql2) === TRUE) {
				echo "<br><br><center><h3><p>Nova Receita Criada Com Sucesso!</p></h3></center>";
				echo "<br><center><a href='../../receita/create_receita.php'><button type='button'>Nova Receita</button></a></center>";
				echo "<br><center><a href='../../receita/crud_receita.php'><button type='button'>Home</button></a></center>";
			}
		}
	} 
	$connect->close();
}
?>