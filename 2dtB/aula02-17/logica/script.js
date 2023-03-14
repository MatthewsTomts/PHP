var confsenha = document.getElementsByName('confSenha')[0]
var senha = document.getElementsByName('senha')[0]
confsenha.addEventListener('input', conferir)
senha.addEventListener('input', conferir)

function conferir() {
	if (senha.value == confsenha.value && senha.value != '' && confsenha.value != '') {
		document.getElementById('enviar').disabled = false;
	} else {
		document.getElementById('enviar').disabled = true;
	}
}

function view() {
     senha = document.getElementsByName('senha')[0]
     if (senha.type == 'text') {
          senha.type = 'password'
     } else {
          senha.type = 'text'
     }
}
