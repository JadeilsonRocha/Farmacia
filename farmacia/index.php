<?php
#maneiras de referenciar um pasta
/*Cada um desses muda a forma como um diretório é referenciado.

Suponhamos um arquivo teste.txt:

/teste.txt: significa que o arquivo teste.txt está na pasta raiz do sistema;

./teste.txt: significa que o arquivo teste.txt está na mesma pasta que o script está rodando;

../teste.txt: significa que o arquivo teste.txt está na pasta imediatamente acima da pasta em que o script PHP está rodando
*/
?>
<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="php_action/stylesheet.css"/>
	<title>Farmácia Popular</title>

	<style type="text/css">
	body{
		background: #B0E0E6;
	}
		.manageMember {
			width: 60%;
			margin: auto;
		}

		table {
			width: 110%;
			margin-top: 20px;
		}
	</style>
	
</head>
<body>
<h1> <center> Sistema Geral "Farmácia Popular" </center> </h1>
<form method="post" action="">
	<fieldset>
		<img src="farmacia.gif" align="right"
		<legend> <h3> &nbsp; &nbsp; Selecione uma Opção:</legend>
		<br>
		<br>
		<br>		
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="cliente/crud_cliente.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Cliente</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="filial/crud_filial.php"> <button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Filial</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="laboratorio/crud_lab.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Laboratório</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="perfume/crud_perfume.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Perfume</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="comercializacao/crud_comercializacao.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Comercializacao</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="medicamento/crud_medicamento.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Medicamento</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="venda/crud_venda.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Venda</button></a>
		<br>
		<br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="receita/crud_receita.php"><button class="MeuInput" type="button" style="width: 120px; height: 40px; background-color: #90EE90">Receita</button></a>
		<br>
		<br>
		</h3><br>
	</fieldset>
</form>

</body>
</html>