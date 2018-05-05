drop database Anki2;
create database Anki2;
use Anki2;
CREATE TABLE Pergunta (
	perguntaId bigint NOT NULL AUTO_INCREMENT,
	respostaId bigint NOT NULL,
	deckId bigint NOT NULL,
	texto varchar(500) NOT NULL,
	criador bigint NOT NULL,
	dataCriacao DATETIME NOT NULL,
	PRIMARY KEY (perguntaId)
);

CREATE TABLE Grupo (
	grupoId bigint NOT NULL AUTO_INCREMENT,
	nome varchar(30) NOT NULL UNIQUE,
	criacao DATETIME NOT NULL UNIQUE,
	descricao varchar(200) NOT NULL,
	PRIMARY KEY (grupoId)
);

CREATE TABLE Usuario (
	usuarioId bigint NOT NULL AUTO_INCREMENT,
	nome varchar(20) NOT NULL,
	sobrenome varchar(50) NOT NULL,
	email varchar(50) NOT NULL UNIQUE,
	username varchar(20) NOT NULL UNIQUE,
	password varchar(32) NOT NULL,
	PRIMARY KEY (usuarioId)
);

CREATE TABLE Resposta (
	respostaId bigint NOT NULL AUTO_INCREMENT,
	texto longblob NOT NULL,
	PRIMARY KEY (respostaId)
);

CREATE TABLE Usuario_Grupo (
	usuarioId bigint NOT NULL,
	grupoId bigint NOT NULL,
	permissaoId bigint NOT NULL,
    CONSTRAINT PK_Usuario_Grupo PRIMARY KEY (usuarioId, grupoId)
);

CREATE TABLE Deck_Usuario (
	usuarioId bigint NOT NULL,
	deckId bigint NOT NULL,
	CONSTRAINT PK_Deck_Usuario PRIMARY KEY (usuarioId, deckId)
);

CREATE TABLE Deck_Grupo (
	grupoId bigint NOT NULL,
	deckId bigint NOT NULL,
	CONSTRAINT PK_Deck_Grupo PRIMARY KEY (grupoId, deckId)
);

CREATE TABLE Deck (
	deckId bigint NOT NULL AUTO_INCREMENT,
	categoriaId bigint NOT NULL,
	descricao varchar(200) NOT NULL,
	PRIMARY KEY (deckId)
);

CREATE TABLE Categoria (
	categoriaId bigint NOT NULL AUTO_INCREMENT,
	nome varchar(20) NOT NULL UNIQUE,
	PRIMARY KEY (categoriaId)
);

CREATE TABLE Permissao (
	permissaoId bigint NOT NULL AUTO_INCREMENT,
	descricao varchar(20) NOT NULL UNIQUE,
	leitura char(1) NOT NULL,
	escrita char(1) NOT NULL,
	expulsao char(1) NOT NULL,
	aprovacao char(1) NOT NULL,
	PRIMARY KEY (permissaoId)
);

ALTER TABLE Pergunta ADD CONSTRAINT Pergunta_fk0 FOREIGN KEY (respostaId) REFERENCES Resposta(respostaId);

ALTER TABLE Pergunta ADD CONSTRAINT Pergunta_fk1 FOREIGN KEY (deckId) REFERENCES Deck(deckId);

ALTER TABLE Pergunta ADD CONSTRAINT Pergunta_fk2 FOREIGN KEY (criador) REFERENCES Usuario(usuarioId);

ALTER TABLE Usuario_Grupo ADD CONSTRAINT Usuario_Grupo_fk0 FOREIGN KEY (usuarioId) REFERENCES Usuario(usuarioId);

ALTER TABLE Usuario_Grupo ADD CONSTRAINT Usuario_Grupo_fk1 FOREIGN KEY (grupoId) REFERENCES Grupo(grupoId);

ALTER TABLE Usuario_Grupo ADD CONSTRAINT Usuario_Grupo_fk2 FOREIGN KEY (permissaoId) REFERENCES Permissao(permissaoId);

ALTER TABLE Deck_Usuario ADD CONSTRAINT Deck_Usuario_fk0 FOREIGN KEY (usuarioId) REFERENCES Usuario(usuarioId);

ALTER TABLE Deck_Usuario ADD CONSTRAINT Deck_Usuario_fk1 FOREIGN KEY (deckId) REFERENCES Deck(deckId);

ALTER TABLE Deck_Grupo ADD CONSTRAINT Deck_Grupo_fk0 FOREIGN KEY (grupoId) REFERENCES Grupo(grupoId);

ALTER TABLE Deck_Grupo ADD CONSTRAINT Deck_Grupo_fk1 FOREIGN KEY (deckId) REFERENCES Deck(deckId);

ALTER TABLE Deck ADD CONSTRAINT Deck_fk0 FOREIGN KEY (categoriaId) REFERENCES Categoria(categoriaId);

insert into Usuario (nome , sobrenome , email , username , password) values ('Vittoria' , 'Sacker'   , 'vsacker0@shareasale.com' , 'vsacker0'  , md5(concat('IcBCOJbyp2','vsacker0')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Gayelord' , 'Stigers'  , 'gstigers1@youtube.com'   , 'gstigers1' , md5(concat('3Q05V2Y','gstigers1')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Ebonee'   , 'Foote'    , 'efoote2@ocn.ne.jp'       , 'efoote2'   , md5(concat('ZEm1VKtLnF','efoote2')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Savina'   , 'Brik'     , 'sbrik3@chron.com'        , 'sbrik3'    , md5(concat('xVOPZAR5J4J','sbrik3')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Rani'     , 'Doret'    , 'rdoret4@omniture.com'    , 'rdoret4'   , md5(concat('6tp5NCBl','rdoret4')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Simonne'  , 'McGuirk'  , 'smcguirk5@tumblr.com'    , 'smcguirk5' , md5(concat('MZNhRkVNiA','smcguirk5')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Eilis'    , 'Tommasi'  , 'etommasi6@narod.ru'      , 'etommasi6' , md5(concat('qeGmxNKNM8a','etommasi6')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Yvor'     , 'de Pinna' , 'ydepinna7@w3.org'        , 'ydepinna7' , md5(concat('wroQw0YYGKL','ydepinna7')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Myrwyn'   , 'Lavin'    , 'mlavin8@irs.gov'         , 'mlavin8'   , md5(concat('e6ZQF0xG7tQ','mlavin8')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Jamie'    , 'Lear'     , 'jlear9@cpanel.net'       , 'jlear9'    , md5(concat('oVQKlvcq','jlear9')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Kania'    , 'Esparza'  , 'kesparzaa@smugmug.com'   , 'kesparzaa' , md5(concat('735AuUCH2l','kesparzaa')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Althea'   , 'Velden'   , 'aveldenb@tiny.cc'        , 'aveldenb'  , md5(concat('k2FFz5mx2yk','aveldenb')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Jerrilyn' , 'Alben'    , 'jalbenc@bing.com'        , 'jalbenc'   , md5(concat('MN1T4Vytn','jalbenc')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Melissa'  , 'Samper'   , 'msamperd@desdev.cn'      , 'msamperd'  , md5(concat('dUuMGvprueC','msamperd')));
insert into Usuario (nome , sobrenome , email , username , password) values ('Raddie'   , 'Senton'   , 'rsentone@phpbb.com'      , 'rsentone'  , md5(concat('TuXkJYBxigWd','rsentone')));

insert into grupo (nome , criacao , descricao) values ('Grupo1' , CURDATE()   , 'Grupo1');
insert into grupo (nome , criacao , descricao) values ('Grupo2' , CURDATE()+1 , 'Grupo2');
insert into grupo (nome , criacao , descricao) values ('Grupo3' , CURDATE()+2 , 'Grupo3');

insert into permissao (descricao , leitura , escrita , expulsao , aprovacao) values ('Administrador' , 1 , 1 , 1 , 1);
insert into permissao (descricao , leitura , escrita , expulsao , aprovacao) values ('Comum'         , 1 , 0 , 0 , 0);

insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 1), (select grupoId from anki2.grupo order by 1 limit 1), (select permissaoId from anki2.permissao order by 1 limit 1));
insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 1,1), (select grupoId from anki2.grupo order by 1 limit 1), (select permissaoId from anki2.permissao order by 1 limit 1,1));
insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 2,1), (select grupoId from anki2.grupo order by 1 limit 1), (select permissaoId from anki2.permissao order by 1 limit 1));
insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 3,1), (select grupoId from anki2.grupo order by 1 limit 1,1), (select permissaoId from anki2.permissao order by 1 limit 1));
insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 4,1), (select grupoId from anki2.grupo order by 1 limit 1,1), (select permissaoId from anki2.permissao order by 1 limit 1,1));
