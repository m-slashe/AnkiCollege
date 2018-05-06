insert into deck (categoriaId, nome) values ((select usuarioid from anki2.usuario order by 1 limit 1), 'Teste1');
insert into deck (categoriaId, nome) values ((select usuarioid from anki2.usuario order by 1 limit 1,1), 'Teste2');
insert into deck (categoriaId, nome) values ((select usuarioid from anki2.usuario order by 1 limit 2,1), 'Teste3');
insert into deck (categoriaId, nome) values ((select usuarioid from anki2.usuario order by 1 limit 3,1), 'Teste4');
insert into deck (categoriaId, nome) values ((select usuarioid from anki2.usuario order by 1 limit 4,1), 'Teste5');
