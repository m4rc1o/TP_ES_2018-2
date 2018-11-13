function carregarTelaIni(){
	var modAluno = document.getElementById("mod_aluno");
	var modProfessor = document.getElementById("mod_professor");
	if(modAluno.checked == true){
		window.location = "tela_turmas_aluno.html";
	}else{
		window.location = "tela_turmas_professor.html";
	}
	window.alert("Entrou na função");
}
