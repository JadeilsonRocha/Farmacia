
<?php require_once '../php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../php_action/stylesheet.css"/>
	<title>Farmácia Popular</title>
	<style>
	body{
		background: #B0E0E6;
	}
		.manageMember {
			width: 70%;
			margin: 10px 30px 30px 50px;
		}

		table {
			width: 130%;
			height: 20%;
			margin-top: 10px;
		}

	</style>
</head>
<body>
	<h1> <center> Lista de Filiais </center> </h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Codigo </th>
				<th>Nome</th>
				<th>Rua</th>
				<th>Numero</th>
				<th>Complemento</th>
				<th>Bairro</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>CEP</th>
				<th>Fone</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM filial, endereco WHERE filial.codEndereco = endereco.codEndereco";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['codFilial']."</td>
						<td>".$row['nome']."</td>
						<td>".$row['rua']."</td>
						<td>".$row['numero']."</td>
						<td>".$row['complemento']."</td>
						<td>".$row['bairro']."</td>
						<td>".$row['cidade']."</td>
						<td>".$row['estado']."</td>
						<td>".$row['cep']."</td>
						<td>".$row['fone']."</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Não há filiais atualmente.</center></td></tr>";
			}
			?>
		
		</tbody>

	</table>
	<form method="post" action="./crud_filial.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>	
</div>
</body>
</html>