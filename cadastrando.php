<?php
	include_once ('conexao.php');

	if(isset($_POST['nome'])) {
		$nome= $_POST['nome'];
		$sobrenome= $_POST['sobrenome'];
		$pais= $_POST['pais'];
		$estado= $_POST['estado'];
		$cidade= $_POST['cidade'];
		$email= $_POST['email'];
		$senha= $_POST['senha'];

		if (!empty ($nome) AND !empty ($sobrenome) AND !empty($pais) AND !empty($cidade) AND !empty($estado) AND !empty($email) AND !empty($senha)) {
			$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' ");

			if (mysqli_num_rows($sql) > 0) {			
			//echo "Email já cadastrado";
			header ("location: login.php?ja_cadastrado");
			} 
			
			else {
				$query = "INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha) 
				VALUES('$nome','$sobrenome','$pais','$estado','$cidade','$email','$senha');";
				$sql = mysqli_query($conexao,$query) or die (mysql_error($conexao));
				header ("location: login.php?sucesso_cadastro");
			}

		}
		else {
				//echo 'Preencha todos os campos';
				header ('location: cadastro.php?vazio_cadastro');
			}
	}
	