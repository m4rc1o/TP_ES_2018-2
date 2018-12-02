CREATE SCHEMA avadesk;
USE avadesk;

CREATE TABLE Usuario ( -- professor e aluno tem os mesmos atributos mas para envolver 3 tabelas vamos ter que fazer herança
    cpf char(11) NOT NULL,
    nome varchar(60) NOT NULL,
    email varchar(50) NOT NULL,
    sexo char(1),
    data_nasc date NOT NULL,
    modalidade char(1) NOT NULL, -- A OU P
    PRIMARY KEY (cpf)
);

CREATE TABLE Disciplina (
    codDisc char(6) NOT NULL,
    nomeDisc varchar(60),
    PRIMARY KEY (codDisc)
);

CREATE TABLE Turma (
    codigoTurma varchar(3) NOT NULL,
    vagas int NOT NULL,
    fk_codDisc char(6) NOT NULL,
    FOREIGN KEY (fk_codDisc) REFERENCES Disciplina(codDisc),
    PRIMARY KEY (codigoTurma, fk_codDisc)
);


CREATE TABLE Aluno (
    cpf char(11) NOT NULL,
    data_entrada date NOT NULL,
    FOREIGN KEY (cpf) REFERENCES Usuario(cpf)
);

CREATE TABLE Professor(
    cpf char(11) NOT NULL,
    salario int NOT NULL,
    FOREIGN KEY (cpf) REFERENCES Usuario(cpf)
);