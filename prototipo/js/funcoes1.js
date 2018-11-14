function carregarTelaIni(){
	var modAluno = document.getElementById("mod_aluno");
	var modProfessor = document.getElementById("mod_professor");
	if(modAluno.checked == true){
		window.open("tela_turmas_aluno.html", "_self");
	}else if(modProfessor.checked == true){
		window.open("tela_turmas_professor.html", "_self");
	}
}

function addItemLista() {

    var texto = document.getElementById("txt_add_turma").value;

    var li = document.createElement("li");
  	li.appendChild(document.createTextNode(texto));

    document.getElementById("lista_turmas").append(li);
}