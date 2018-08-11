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
	<h1><center>Atualizar Receita</center></h1>
<div class="manageMember">
	<br><br>
	<table border="2" cellspacing="3" cellpadding="5">
		<thead>
			<tr>
				<th>Código</th>
				<th>Paciente</th>
				<th>CRM</th>
				<th>Estado CRM</th>
				<th>Data da Receita (YYYY-MM-DD)</th>
				<th>Opção</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM receita WHERE codReceita >= 1";
			$result = $connect->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['codReceita']."</td>
						<td>".$row['nomePaciente']."</td>
						<td>".$row['crm']."</td>
						<td>".$row['estadoCRM']."</td>
						<td>".$row['dataReceita']."</td>
						<td>
							<a href='edit_receita.php?codReceita=".$row['codReceita']."'><button type='button'>Editar Dados</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
			
		</tbody>

	</table>
	<form method="post" action="./crud_receita.php">
	<br><center>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <input type="image" src="../botao_voltar.png" alt="Submit" width="65" height="65"></center>
	</form>
</div>
</body>
</html>