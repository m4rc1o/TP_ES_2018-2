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

    var texto = document.getElementById("txt_turma_add").value;

    var li = document.createElement("li");
    li.innerHTML = '<a href="turma_qualquer.html" class="link_turma"' +
    	'title="Ver detalhes da turma">' + texto + '</a><span class="close"' +
    	' title="Desinscrever-se">&times;</span>';
    //<li><a href="turma_qualquer.html" class="link_turma">Matemática discreta</a><span class="close">&times;</span></li>

    document.querySelector('.content').append(li);

    var closebtns = document.getElementsByClassName("close");
    closebtns[closebtns.length - 1].addEventListener("click", function() {
				this.parentElement.style.display = 'none';
			  });
}