function validar() {
	var nome = signup.nome.value;
	var sobrenome = signup.sobrenome.value;
	var pais = signup.pais.value;
	var estado = signup.pais.value;
	var cidade = signup.cidade.value;
	var email = signup.email.value;
	var senha = signup.senha.value;

	if (nome == "") {
		alert ('Preencha o Campo Nome');
		signup.nome.focus();
		return false;
	}

	else if (sobrenome == "") {
		alert ('Preencha o Campo Sobrenome');
		signup.sobrenome.focus();
		return false;
	}

	else if (pais == "") {
		alert ('Preencha o Campo País');
		signup.pais.focus();
		return false;
	}
	
	else if (estado == "") {
		alert ('Preencha o Campo Estado');
		signup.estado.focus();
		return false;
	}

	else if (cidade == "") {
		alert ('Preencha o Campo Cidade');
		signup.cidade.focus();
		return false;
	}

	else if (email == "") {
		alert ('Preencha o Campo Email');
		signup.email.focus();
		return false;
	}
	
	else if (senha == "") {
		alert ('Preencha o Campo Senha');
		signup.senha.focus();
		return false;
	}

}