<!DOCTYPE html>
<html>


	<title>Cadastro</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="design.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

</head>

<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<img src="logo-unimes.png" alt="Logo" style="width:40px;"> 
  	<a class="navbar-brand" href="cadastro.php">Home</a>
   	<a class="navbar-brand" href="fale_conosco.php">Fale Conosco</a>
   	<a class="navbar-brand" href= "sobre.html">Sobre</a>

</nav>

	
<?php
	if (isset($_GET ['vazio_cadastro'])) {
		echo '<span style="background-color:#FF0000">Preencha Todos os Campos!!</span><br>';
	}
?>

	
<h3><center> Preencha os campos Abaixo para se Cadastrar </h3></center>
<br> 

	<form method= "POST" action= "cadastrando.php">
		<center>
			Nome: <input type="text" name="nome" placeholder="nome"><br> 
			Sobrenome: <input type="text" name="sobrenome" placeholder="sobrenome"><br>
			Pais: <input type="text" name="pais" placeholder="pais"><br>
			Estado: <input type="text" name="estado" placeholder="estado"><br>
			Cidade: <input type="text" name="cidade" placeholder="cidade"><br>
			Email: <input type="email" name="email" placeholder="email"><br>
			Senha: <input type="password" name="senha" placeholder="senha"><br>
		
			<input type = "submit" value="Enviar">
			<input type= "reset" value= "Limpar">
		</center>

		<center><b><i><h8> * Todos os Campos são de Preenchimento Obrigatório </h8></b></i></center>
	</form>

</body>
</html>	


