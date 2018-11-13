function carregarTelaIni(){
	var modAluno = document.getElementById("mod_aluno");
	var modProfessor = document.getElementById("mod_professor");
	if(modAluno.checked == true){
		window.open("tela_turmas_aluno.html", "_self");
	}else if(modProfessor.checked == true){
		window.open("tela_turmas_professor.html", "_self");
	}
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}