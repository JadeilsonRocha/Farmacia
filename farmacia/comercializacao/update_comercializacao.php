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
	<h1><center>Atualizar Comercialização</center></h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Código de Comercialização </th>
				<th>Código da Filial</th>
				<th>Código do Produto</th>
				<th>Nome do Produto</th>
				<th>Opção</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM comercializacao as c Join produto on c.idProduto = produto.codProduto ";
			$result = $connect->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['codComer']."</td>
						<td>".$row['idFilial']."</td>
						<td>".$row['idProduto']."</td>
						<td>".$row['nome']."</td>
						<td>
							<a href='edit_comercializacao.php?codComer=".$row['codComer']."'><button type='button'>Editar</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Não há filial atualmente.</center></td></tr>";
			}
			?>
			
		</tbody>

	</table>
	<form method="post" action="./crud_comercializacao.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</div>
</body>
</html>