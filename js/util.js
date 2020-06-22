function Voltar(){
	location.href=" index.php"	
};


function desabilitar(valor) {
	var status = document.getElementById('mes').disabled;

	if (valor == 'sim' && !status) {
	document.getElementById('mes').disabled = true;
	} else {
	document.getElementById('mes').disabled = false;
	}
};
