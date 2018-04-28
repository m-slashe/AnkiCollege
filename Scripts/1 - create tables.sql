CREATE TABLE `Pergunta` (
	`perguntaId` bigint NOT NULL AUTO_INCREMENT,
	`respostaId` bigint NOT NULL,
	`deckId` bigint NOT NULL,
	`texto` varchar(500) NOT NULL,
	`criador` bigint NOT NULL,
	`dataCriacao` DATETIME NOT NULL,
	PRIMARY KEY (`perguntaId`)
);

CREATE TABLE `Grupo` (
	`grupoId` bigint NOT NULL AUTO_INCREMENT,
	`nome` varchar(30) NOT NULL UNIQUE,
	`criacao` DATETIME NOT NULL UNIQUE,
	`descricao` varchar(200) NOT NULL,
	PRIMARY KEY (`grupoId`)
);

CREATE TABLE `Usuario` (
	`usuarioId` bigint NOT NULL AUTO_INCREMENT,
	`Nome` varchar(20) NOT NULL,
	`Sobrenome` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL UNIQUE,
	`username` varchar(20) NOT NULL UNIQUE,
	`password` varchar(20) NOT NULL,
	PRIMARY KEY (`usuarioId`)
);

CREATE TABLE `Resposta` (
	`respostaId` bigint NOT NULL AUTO_INCREMENT,
	`texto` longblob NOT NULL,
	PRIMARY KEY (`respostaId`)
);

CREATE TABLE `Usuario_Grupo` (
	`usuarioId` bigint NOT NULL,
	`grupoId` bigint NOT NULL,
	`permissaoId` bigint NOT NULL
   	CONSTRAINT PK_Usuario_Grupo PRIMARY KEY (`usuarioId`, `grupoId`, `permissaoId`)
);

CREATE TABLE `Deck_Usuario` (
	`usuarioId` bigint NOT NULL,
	`deckId` bigint NOT NULL
	CONSTRAINT PK_Deck_Usuario PRIMARY KEY (`usuarioId`, `deckId`)
);

CREATE TABLE `Deck_Grupo` (
	`grupoId` bigint NOT NULL,
	`deckId` bigint NOT NULL
	CONSTRAINT PK_Deck_Grupo PRIMARY KEY (`grupoId`, `deckId`)
);

CREATE TABLE `Deck` (
	`deckId` bigint NOT NULL AUTO_INCREMENT,
	`categoriaId` bigint NOT NULL,
	PRIMARY KEY (`deckId`)
);

CREATE TABLE `Categoria` (
	`categoriaId` bigint NOT NULL AUTO_INCREMENT,
	`nome` varchar(20) NOT NULL UNIQUE,
	PRIMARY KEY (`categoriaId`)
);

CREATE TABLE `Permissao` (
	`permissaoId` bigint NOT NULL AUTO_INCREMENT,
	`leitura` char(1) NOT NULL,
	`escrita` char(1) NOT NULL,
	`expulsao` char(1) NOT NULL,
	`aprovacao` char(1) NOT NULL,
	PRIMARY KEY (`permissaoId`)
);

ALTER TABLE `Pergunta` ADD CONSTRAINT `Pergunta_fk0` FOREIGN KEY (`respostaId`) REFERENCES `Resposta`(`respostaId`);

ALTER TABLE `Pergunta` ADD CONSTRAINT `Pergunta_fk1` FOREIGN KEY (`deckId`) REFERENCES `Deck`(`deckId`);

ALTER TABLE `Pergunta` ADD CONSTRAINT `Pergunta_fk2` FOREIGN KEY (`criador`) REFERENCES `Usuario`(`usuarioId`);

ALTER TABLE `Usuario_Grupo` ADD CONSTRAINT `Usuario_Grupo_fk0` FOREIGN KEY (`usuarioId`) REFERENCES `Usuario`(`usuarioId`);

ALTER TABLE `Usuario_Grupo` ADD CONSTRAINT `Usuario_Grupo_fk1` FOREIGN KEY (`grupoId`) REFERENCES `Grupo`(`grupoId`);

ALTER TABLE `Usuario_Grupo` ADD CONSTRAINT `Usuario_Grupo_fk2` FOREIGN KEY (`permissaoId`) REFERENCES `Permissao`(`permissaoId`);

ALTER TABLE `Deck_Usuario` ADD CONSTRAINT `Deck_Usuario_fk0` FOREIGN KEY (`usuarioId`) REFERENCES `Usuario`(`usuarioId`);

ALTER TABLE `Deck_Usuario` ADD CONSTRAINT `Deck_Usuario_fk1` FOREIGN KEY (`deckId`) REFERENCES `Deck`(`deckId`);

ALTER TABLE `Deck_Grupo` ADD CONSTRAINT `Deck_Grupo_fk0` FOREIGN KEY (`grupoId`) REFERENCES `Grupo`(`grupoId`);

ALTER TABLE `Deck_Grupo` ADD CONSTRAINT `Deck_Grupo_fk1` FOREIGN KEY (`deckId`) REFERENCES `Deck`(`deckId`);

ALTER TABLE `Deck` ADD CONSTRAINT `Deck_fk0` FOREIGN KEY (`categoriaId`) REFERENCES `Categoria`(`categoriaId`);
