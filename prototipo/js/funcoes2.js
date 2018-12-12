function nada(){
    alert("Nada");
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

//Exibe os detalhes da turma
function carregarDadosTurma(codTurma){

    var ajax = new XMLHttpRequest();
    var metodo = "GET";
    var url = "http://localhost/TP_ES_2018-2/prototipo/php/ger_reqs.php?reqId=detalhesTurma&codTurma=" + codTurma;
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
            var codigoTurma = document.getElementById("codTurma");
            codigoTurma.value = codTurma;
            var codDisc = document.getElementById("codDisc");
            codDisc.value = resposta['codDisc'];
            var cpfProf = document.getElementById("cpfProf");
            cpfProf.value = resposta['cpfProf'];
            var qtdVagas = document.getElementById("qtdVagas");
            qtdVagas.value = resposta['vagas'];
        }
    }
}


function carregarTurmasProf(){
	var ajax = new XMLHttpRequest();
	var metodo = "GET";
	var url = "http://localhost/TP_ES_2018-2/prototipo/php/ger_reqs.php?reqId=turmasProf";
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

			//Adiciona os elementos recebidos à lista de turmas
			for(var indice in resposta){
				//Cria um novo elemento li com a resposta recebida
				var li = document.createElement("li");

				//Definindo a marcação do novo ítem da lista
				var codigoTurma = resposta[indice];
				li.innerHTML = "<a href='http://localhost/TP_ES_2018-2/prototipo/turma_qualquer.html?codTurma="+
					codigoTurma + "' class='link_turma' title='Ver detalhes da turma'>" + codigoTurma + 
					"</a><span id=" + codigoTurma + " class='close' title='Desinscrever-se'>&times;</span>";

				//Adiciona o elemento li à lista
				document.querySelector('.content').append(li);

				//Fazendo com que o x tenha a função de desinscrever o professor da turma
				var btnExcluir = document.getElementById(codigoTurma);
				btnExcluir.addEventListener("click", function() {
					//Faz a turma deixar de ser exibida na tela
					this.parentElement.style.display = 'none';

					//Seta o professor da turma para nulo no BD
					DesvincularTurma(codigoTurma);
			  	});
			}	
		}
	}	
}

//Seta o professor da turma para nulo no BD
function DesvincularTurma(codigoTurma){
	var ajax = new XMLHttpRequest();
	var metodo = "GET";
	//var params = "reqId=desvincular&codTurma=" + codigoTurma;
	var url = "http://localhost/TP_ES_2018-2/prototipo/php/ger_reqs.php?reqId=desvincular&codTurma=" + codigoTurma;
	var assinc = true;

	//Criando a requisição
	ajax.open(metodo, url, assinc);

	//Enviando a requisição
	ajax.send();

	//recebendo a resposta de php/ger_reqs.php
	ajax.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var resposta = JSON.parse(this.response);
			alert(resposta);
		}
	}
}

function carregarDisciplinas(){
	var ajax = new XMLHttpRequest();
	var metodo = "GET";
	var url = "http://localhost/TP_ES_2018-2/prototipo/php/ger_reqs.php?reqId=disciplinas";
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

			var listCodDisc = document.getElementById('cod_disc');
			//Adiciona os elementos recebidos à lista de turmas
			for(var indice in resposta){
				var opcao = document.createElement("option");
				var codDisc = resposta[indice];
				opcao.value = codDisc;
				opcao.innerHTML = codDisc;
				listCodDisc.append(opcao);
			}

		}
	}	
}

function carregarProfessores(){
	var ajax = new XMLHttpRequest();
	var metodo = "GET";
	var url = "http://localhost/TP_ES_2018-2/prototipo/php/ger_reqs.php?reqId=profs";
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

			var listaProfs = document.getElementById('nomes_prof');
			
			//Adiciona os elementos recebidos à lista de professores
			for(var indice in resposta){
				var opcao = document.createElement("option");
				var nomeProf = resposta[indice]["nome"];
				var cpfProf = resposta[indice]["cpf"];
				opcao.value = cpfProf;
				opcao.innerHTML = nomeProf;
				listaProfs.append(opcao);
			}

		}
	}	
}

function alterarTurma(){
	var novoCod = document.getElementById("codTurma").value;
	var codAnterior = document.getElementById("nomeTurma").innerHTML;

	var ajax = new XMLHttpRequest();
	var metodo = "GET";
	var url = "http://localhost/TP_ES_2018-2/prototipo/php/ger_reqs.php?reqId=altTurma&novoCod=" + novoCod +
				"&codAnt=" + codAnterior;
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
			carregarDadosTurma(novoCod);
			alert(resposta);
		}
	}	
}

function deletarTurma(){
	var codTurma = document.getElementById("codTurma").value;

	var ajax = new XMLHttpRequest();
	var metodo = "GET";
	var url = "http://localhost/TP_ES_2018-2/prototipo/php/ger_reqs.php?reqId=deletarTurma&codTurma=" + codTurma;
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
			alert(resposta);
		}
	}	
}

function irParaHome(){
	window.location.href = "http://localhost/TP_ES_2018-2/prototipo/tela_turmas_professor.html";
}

function sair(){
	window.location.href = "http://localhost/TP_ES_2018-2/prototipo/tela_login.html";
}
