insert into pergunta (respostaId, deckId, texto, criador, dataCriacao) values((select respostaId from anki2.resposta order by 1 limit 1), (select deckId from anki2.deck order by 1 limit 1), 'Quais são os dois tipos de gênes?', (select usuarioId from anki2.usuario order by 1 limit 1), CURRENT_TIMESTAMP );
insert into pergunta (respostaId, deckId, texto, criador, dataCriacao) values((select respostaId from anki2.resposta order by 1 limit 1,1), (select deckId from anki2.deck order by 1 limit 1), 'Você sabe biologia?', (select usuarioId from anki2.usuario order by 1 limit 1), CURRENT_TIMESTAMP );
insert into pergunta (respostaId, deckId, texto, criador, dataCriacao) values((select respostaId from anki2.resposta order by 1 limit 2,1), (select deckId from anki2.deck order by 1 limit 1), 'Você tem certeza que não sabe biologia?', (select usuarioId from anki2.usuario order by 1 limit 7,1), CURRENT_TIMESTAMP );
insert into pergunta (respostaId, deckId, texto, criador, dataCriacao) values((select respostaId from anki2.resposta order by 1 limit 3,1), (select deckId from anki2.deck order by 1 limit 1,1), 'Quais os 3 pilares da segurança da Informação?', (select usuarioId from anki2.usuario order by 1 limit 1,1), CURRENT_TIMESTAMP );
insert into pergunta (respostaId, deckId, texto, criador, dataCriacao) values((select respostaId from anki2.resposta order by 1 limit 4,1), (select deckId from anki2.deck order by 1 limit 2,1), 'SQL é uma linguagem case sensitive ou case insensitive?', (select usuarioId from anki2.usuario order by 1 limit 2,1), CURRENT_TIMESTAMP );
insert into pergunta (respostaId, deckId, texto, criador, dataCriacao) values((select respostaId from anki2.resposta order by 1 limit 5,1), (select deckId from anki2.deck order by 1 limit 3,1), 'Ponteiros?', (select usuarioId from anki2.usuario order by 1 limit 3,1), CURRENT_TIMESTAMP );
insert into pergunta (respostaId, deckId, texto, criador, dataCriacao) values((select respostaId from anki2.resposta order by 1 limit 6,1), (select deckId from anki2.deck order by 1 limit 4,1), 'Eu to testando.', (select usuarioId from anki2.usuario order by 1 limit 4,1), CURRENT_TIMESTAMP );