function nada(){
    alert("Nada");
}


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

function addItemListaAluno() {

    var texto = document.getElementById("txt_turma_add").value;

    var li = document.createElement("li");
    li.innerHTML = '<a href="turma_qualquer_aluno.html" class="link_turma"' +
    	'title="Ver detalhes da turma">' + texto + '</a><span class="close"' +
    	' title="Desinscrever-se">&times;</span>';
    //<li><a href="turma_qualquer.html" class="link_turma">Matemática discreta</a><span class="close">&times;</span></li>

    document.querySelector('.content').append(li);

    var closebtns = document.getElementsByClassName("close");
    closebtns[closebtns.length - 1].addEventListener("click", function() {
				this.parentElement.style.display = 'none';
			  });
}

function addItemListaProfessor() {

    var texto = document.getElementById("txt_turma_add").value;

    var li = document.createElement("li");
    li.innerHTML = '<a href="turma_qualquer_professor.html" class="link_turma"' +
    	'title="Ver detalhes da turma">' + texto + '</a><span class="close"' +
    	' title="Remover">&times;</span>';
    //<li><a href="turma_qualquer.html" class="link_turma">Matemática discreta</a><span class="close">&times;</span></li>

    document.querySelector('.content').append(li);

    var closebtns = document.getElementsByClassName("close");
    closebtns[closebtns.length - 1].addEventListener("click", function() {
				this.parentElement.style.display = 'none';
			  });
}

function exibirTurmasDisponiveis() {
	 var turma = "<?=$turma?>";
}

//Exibe o nome do usuário logado no topo da página
function setaNomeUsuarioLogado(){
    var ajax = new XMLHttpRequest();
    var metodo = "GET";
    var url = "http://localhost/TP_ES_2018-2/prototipo/php/ger_reqs.php?reqId=nomeUsuario";
    var assinc = true;

    //Criando a requisição
    ajax.open(metodo, url, assinc);

    //Enviando a requisição
    ajax.send();

    //recebendo a resposta de php/ger_reqs.php
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            //Convertendo a resposta do formato JSON para um objeto javascript
            var resposta = JSON.parse(this.response);

            //Setando o nome do usuário para o nome do usuário logado
            //O título com o nome do usuário deve ter Id = "nomeUsuario"
            var nomeUsuario = document.getElementById("nomeUsuario");
            nomeUsuario.innerHTML = resposta;
        }
    }
}
