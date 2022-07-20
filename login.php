<html>
<head>
	<title>Autenticando Usuário</title>	


	<link rel="stylesheet" type="text/css" href="design2.css"> 

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

		
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<img src="logo-unimes.png" alt="Logo" style="width:40px;"> 
  	<a class="navbar-brand" href="cadastro.php">Home</a>
  	<a class="navbar-brand" href="fale_conosco.php">Fale Conosco</a>
  	<a class="navbar-brand" href= "sobre.html">Sobre</a>

 </nav>

<h3> <center> Efetue o Login para Acessar nosso Portal </h3> </center>


<?php
	if (isset($_GET['vazio_login'])) {
		echo '<span style="background-color:#FF0000">Preencha Todos os Campos!!</span>';
	}	

	if (isset($_GET['falha_login'])) {	
		echo '<span style="background-color:#FF0000">Usuário e Senha NÃO Correspondem!</span>';
	}

	if (isset($_GET['sucesso_cadastro'])) {			
		echo '<p><b>Dados cadastrado com sucesso!!</p></b>';
	}

	if (isset($_GET['ja_cadastrado'])) {			
		echo '<span style="background-color:#FF0000">Email Já Cadastrado!!<br> Efetue o Login</span><br>';		
	}	
?> 

<br>
	<center>
		<form method="POST" action="efetuar_login.php">

			Email: <input type="email" name="email" placeholder="login"> <br></br>
			Senha: <input type="password" name="senha" placeholder="senha"><br></br>

			<input type="submit" value= "Entrar">

		</form>
	</center>

</html>

