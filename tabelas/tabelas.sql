CREATE SCHEMA avadesk1;
USE avadesk1;

CREATE TABLE IF NOT EXISTS Usuario ( -- professor e aluno tem os mesmos atributos mas para envolver 3 tabelas vamos ter que fazer herança
    cpf char(11) NOT NULL,
    nome varchar(60) NOT NULL,
    email varchar(50) NOT NULL,
    sexo char(1), -- M OU F
    senha varchar(50),
    data_nasc date NOT NULL,
    modalidade char(1) NOT NULL, -- A OU P
    PRIMARY KEY (cpf)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS Disciplina (
    codDisc varchar(8) NOT NULL,
    nomeDisc varchar(60),
    PRIMARY KEY (codDisc)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS Turma (
    codigoTurma varchar(20) NOT NULL,
    vagas int NOT NULL,
    PRIMARY KEY (codigoTurma)
)CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE IF NOT EXISTS Aula(
    cpfProf char(11) NOT NULL,
    codigoTurma varchar(3) NOT NULL,
    codDisc char(6) NOT NULL,
    FOREIGN KEY (cpfProf) REFERENCES Usuario(cpf) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (codigoTurma) REFERENCES Turma(codigoTurma) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (codDisc) REFERENCES Disciplina(codDisc) ON UPDATE CASCADE ON DELETE RESTRICT,
    PRIMARY KEY (cpfProf, codigoTurma, codDisc)
)CHARACTER SET utf8 COLLATE utf8_general_ci;



insert into Disciplina (codDisc, nomeDisc) values
('DCC-ES', 'Engenharia de Software'),
('DCC-SD', 'Sistemas Distribuidos'),
('DCC-MD', 'Matematica Discreta'),
('DCC-IHC', 'Interface Humano Computador'),
('DCC-IA', 'InteligEncia Artificial'),
('DCC-ED', 'Estrutura de Dados'),
('DCC-IC', 'Introducao a Computacao'),
('DCC-BD', 'Banco de dados'),
('DCC-SGBD', 'Sistemas Gerenciadores de Bancos de Dados'),
('DCC-LFA', 'Linguagens Formais e Automatos'),
('DCC-AG', 'Algoritmos em Grafos'),
('DCC-PPO', 'Praticas Programacao Orientada a Objetos');

insert into Turma (codigoTurma, vagas) values
('10A', 30),
('10B', 45),
('14A', 40),
('20A', 60),
('9C', 15),
('5D', 10);

insert into Usuario(cpf, nome, email, sexo, senha, data_nasc, modalidade) values
('11111111111', 'William', 'william@gmail.com','M','12345678', '1997/07/21', 'P');

