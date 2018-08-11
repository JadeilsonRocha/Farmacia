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
	$cpf = $_POST['cpf'];
	$cod_produto = $_POST['cod_produto'];
	$data_venda = $_POST['data_venda'];
	$idReceita = $_POST['idReceita'];
	$pagamento = $_POST['pagamento'];

	if (strlen($cpf)===0 or strlen($data_venda)===0 or strlen($cod_produto)===0){
		echo "<h2> <br><br> <center> Erro, não deixe os campos vazios! </center></h2>";
		echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Voltar</button></a></center>";
	} else{	
		$sql = "SELECT * FROM medicamento where medicamento.codProduto = {$cod_produto}";
		$result = $connect->query($sql);
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
					$classificacao = $row['classificacao'];
				}
			if ("$classificacao" === '4'){
				if("$idReceita" !=='0' and "$idReceita" !== null and "$idReceita" !== 'NULL' and "$idReceita" !== ''){
					$sql2 = "SELECT * from receita where codReceita = {$idReceita}";
					$result = $connect->query($sql2);
					if($result->num_rows > 0){
						while ($row = $result->fetch_assoc()){
							$cpfPaciente = $row['cpfPaciente'];
						}
						if ($cpfPaciente == $cpf){
							$sql3 = "SELECT * from cliente where cpf = {$cpfPaciente}";
							$result = $connect->query($sql3);
							if($result->num_rows > 0){
								$sql4 = "SELECT valor from produto where codProduto = {$cod_produto}";
								$result = $connect->query($sql4);
								while ($row = $result->fetch_assoc()){
									$valor = $row['valor'];
								}
								$sql5 = "INSERT INTO venda (dataVenda, valorVenda, cpfCliente, idReceita, idProduto, formaPag) VALUES ('$data_venda', '$valor', '$cpf', '$idReceita', '$cod_produto', '$pagamento')";
								$result = $connect->query($sql5);
								echo "<h2> <br><br> <center>Venda Efetuada com Sucesso!</center></h2>";
								echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
								echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
							}else{
								echo "<h2> <br><br> <center>CPF Inválido!</center></h2>";
								echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
								echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
							}
						}else{
							echo "<h2> <br><br> <center>Essa Receita não está ligada ao seu CPF!</center></h2>";
							echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
							echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
						}
					}else{
						echo "<h2> <br><br> <center>Esse medicamento necessita de um Código de Receita Válido!</center></h2>";
						echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
						echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
					}
				}else{
					echo "<h2> <br><br> <center>Código de Receita Inválido!</center></h2>";
					echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
					echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
				}
			}else{
				$sql3 = "SELECT * from cliente where cpf = {$cpf}";
				$result = $connect->query($sql3);
				if($result->num_rows > 0){
					$sql4 = "SELECT valor from produto where codProduto = {$cod_produto}";
					$result = $connect->query($sql4);
					while ($row = $result->fetch_assoc()){
						$valor = $row['valor'];
					}
					$sql5 = "INSERT INTO venda (dataVenda, valorVenda, cpfCliente, idReceita, idProduto, formaPag) VALUES ('$data_venda', '$valor', '$cpf', '$idReceita', '$cod_produto', '$pagamento') ";
					$result = $connect->query($sql5);
					echo "<h2> <br><br> <center>Venda Efetuada com Sucesso!</center></h2>";
					echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
					echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
				}else{
					echo "<h2> <br><br> <center>CPF Inválido!</center></h2>";
					echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
					echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
				}
			}
		} else{
			if("$idReceita" !=='0' and "$idReceita" !== null and "$idReceita" !== 'NULL' and "$idReceita" !== ''){

				$sql2 = "SELECT * from receita where codReceita = {$idReceita}";
				$result = $connect->query($sql2);
				if($result->num_rows > 0){
					while ($row = $result->fetch_assoc()){
						$cpfPaciente = $row['cpfPaciente'];
					}
					if ($cpfPaciente == $cpf){
						$sql10 = " SELECT * from perfume where perfume.codProduto = {$cod_produto}";
						$result = $connect->query($sql10);
						if($result->num_rows > 0){
							$sql4 = "SELECT valor from produto where codProduto = {$cod_produto}";
							$result = $connect->query($sql4);
							while ($row = $result->fetch_assoc()){
								$valor = $row['valor'];
							}
							$sql5 = "INSERT INTO venda (dataVenda, valorVenda, cpfCliente, idReceita, idProduto, formaPag) VALUES ('$data_venda', '$valor', '$cpf', '$idReceita', '$cod_produto', '$pagamento')";
							$result = $connect->query($sql5);
							echo "<h2> <br><br> <center>Venda Efetuada com Sucesso!</center></h2>";
							echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
							echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
						}else{
							echo "<h2> <br><br> <center>Código do Produto Inválido!</center></h2>";
							echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
							echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
						}
					}else{
						echo "<h2> <br><br> <center>Essa Receita não está ligada ao seu CPF!</center></h2>";
						echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
						echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
					}
				}else{
					echo "<h2> <br><br> <center>Código de Receita Inválido!</center></h2>";
					echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
					echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
				}
			}else{
				$sql10 = " SELECT * from perfume where perfume.codProduto = {$cod_produto}";
				$result = $connect->query($sql10);
				if($result->num_rows > 0){
					$sql4 = "SELECT valor from produto where codProduto = {$cod_produto}";
					$result = $connect->query($sql4);
					while ($row = $result->fetch_assoc()){
						$valor = $row['valor'];
					}
					$sql5 = "INSERT INTO venda (dataVenda, valorVenda, cpfCliente, idReceita, idProduto, formaPag) VALUES ('$data_venda', '$valor', '$cpf', '$idReceita', '$cod_produto', '$pagamento')";
					$result = $connect->query($sql5);
					echo "<h2> <br><br> <center>Venda Efetuada com Sucesso!</center></h2>";
					echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
					echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
				}else{
					echo "<h2> <br><br> <center>Código do Produto Inválido!</center></h2>";
					echo "<br><br><center><a href='../../venda/create_venda.php'><button type='button'>Nova Venda</button></a></center>";
					echo "<br><br><center><a href='../../venda/crud_venda.php'><button type='button'>Home</button></a></center>";
				}
			}
		}				
	}
	$connect->close();
}
?>