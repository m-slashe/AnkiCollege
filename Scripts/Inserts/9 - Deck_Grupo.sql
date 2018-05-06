insert into deck_grupo (grupoId, deckId) values ((select grupoId from anki2.grupo order by 1 limit 1), (select deckId from anki2.deck order by 1 limit 2,1));
insert into deck_grupo (grupoId, deckId) values ((select grupoId from anki2.grupo order by 1 limit 1,1), (select deckId from anki2.deck order by 1 limit 3,1));
insert into deck_grupo (grupoId, deckId) values ((select grupoId from anki2.grupo order by 1 limit 2,1), (select deckId from anki2.deck order by 1 limit 4,1));

