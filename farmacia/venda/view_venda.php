
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
	<h1> <center>Listagem de Vendas</center> </h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Codigo</th>
				<th>CPF</th>
				<th>Data da Venda (YYYY-MM-DD)</th>
				<th>Valor Total</th>
				<th>Codigo da Receita</th>
				<th>Codigo do Produto</th>
				<th>Forma de Pagamento</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM venda where codVenda >=1";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['codVenda']."</td>
						<td>".$row['cpfCliente']."</td>
						<td>".$row['dataVenda']."</td>
						<td>".$row['valorVenda']."</td>
						<td>".$row['idReceita']."</td>
						<td>".$row['idProduto']."</td>
						<td>".$row['formaPag']."</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Não há vendas atualmente.</center></td></tr>";
			}
			?>
		
		</tbody>

	</table>
	<form method="post" action="./crud_venda.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>	
</div>
</body>
</html>