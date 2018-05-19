insert into deck_usuario (usuarioId, deckId) values ((select usuarioid from anki2.usuario order by 1 limit 1), (select deckId from anki2.deck order by 1 limit 1));
insert into deck_usuario (usuarioId, deckId) values ((select usuarioid from anki2.usuario order by 1 limit 1,1), (select deckId from anki2.deck order by 1 limit 1,1));

