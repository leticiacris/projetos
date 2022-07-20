<?php 

	include_once('conexao.php');

 	$email= $_POST['email'];
  	$senha= $_POST['senha'];

  	if(!empty($email) AND !empty($senha)) {
		$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ");

		if (mysqli_num_rows($sql) > 0) {
			
			session_start();
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['senha'] = $_POST['senha'];

			//echo 'login efetuado com sucesso';	
			header('location: https://www.unimes.br');
		
		}

			else {
				//echo 'falha ao efetuar login';
				header('location: login.php?falha_login');
			}		
	}		
			

			else {
				//echo 'Preencha todos os campos';
				header('location: login.php?vazio_login');
		}

