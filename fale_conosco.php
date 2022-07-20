
<!DOCTYPE html>
<html>
<head>
	<title>Fale Conosco</title>
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
	if (isset($_GET ['sucesso_mensagem'])) {
		echo '<p><b>Mensagem Enviada com Sucesso!!</p></b>';
	}
	if (isset ($_GET ['vazio_mensagem'])) {
		echo '<span style="background-color:#FF0000">Preencha Todos os Campos !!</span><br>';
	}

?>

<h3><center> Preencha os campos abaixo para Enviar sua Mensagem</h3></center>

<br>

	<form method="POST" action="form_mensagem.php">
		Nome: <input type="text" name="nome" placeholder="inserir o nome completo"><br>
		Email: <input type="email" name="email" placeholder="inserir email"><br>
		Assunto: <input type="text" name="assunto" placeholder="assunto da mensagem"><br>
		Mensagem: <textarea name="mensagem" rows="10" cols="50" placeholder="digite aqui sua mensagem" maxlength="350" style="width: 480px"></textarea> <br>
			
		<input name="send_cad_conteudo" type="submit" value="Enviar">
		<input type= "reset" name="limpar" value="Limpar">

		<center><b><i><h8> * Todos os Campos são de Preenchimento Obrigatório </h8></b></i></center>
	</form>

</body>
</html>

