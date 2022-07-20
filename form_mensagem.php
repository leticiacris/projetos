<?php
	include_once 'conexao2.php';

	if(isset($_POST['nome'])) {
		$nome = $_POST['nome'];
		$email =$_POST['email'];
		$assunto =$_POST['assunto'];
		$mensagem =$_POST['mensagem'];

		if(!empty($nome) AND !empty($email) AND !empty($assunto) AND !empty($mensagem)) {
			$query = "INSERT INTO mensagens_contatos (nome, email, assunto, mensagem) VALUES('$nome','$email','$assunto','$mensagem')";

			$sql = mysqli_query ($conexao, $query) or die (mysqli_error($conexao));
				//echo "Mensagem Enviada com Sucesso";
				header ('location: fale_conosco.php?sucesso_mensagem');
		}	

		else {
			//echo 'Preencha Todos os Campos';
			header ('location: fale_conosco.php?vazio_mensagem');
		}
	}

