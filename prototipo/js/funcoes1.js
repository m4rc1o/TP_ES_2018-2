function carregarTelaIni(){
	var modAluno = document.getElementById("mod_aluno");
	var modProfessor = document.getElementById("mod_professor");
	if(modAluno.checked == true){
		window.open("tela_turmas_aluno.html", "_self");
	}else if(modProfessor.checked == true){
		window.open("tela_turmas_professor.html", "_self");
	}
}

function carregarTelaCadastro() {
	window.open("tela_cadastrar.html", "_self");
}

function carregarTelaIniLogin() {
	window.open("tela_turmas_aluno.html", "_self");
}

function addItem(){
   var ul = document.getElementById("lista_turmas");
   var candidate = document.getElementById("txt_turma");
   var li = document.createElement("li");
   li.setAttribute('id',candidate.value);
   li.appendChild(document.createTextNode(candidate.value));
   ul.appendChild(li);
}

function removeItem(){
    var ul = document.getElementById("lista_turmas");
    var candidate = document.getElementById("txt_turma");
    var item = document.getElementById(candidate.value);
    ul.removeChild(item);
}

function addItemLista() {

    var texto = document.getElementById("txt_add_turma").value;

    var li = document.createElement("li");
  	li.appendChild(document.createTextNode(texto));

    document.getElementById("lista_turmas").append(li);
}
