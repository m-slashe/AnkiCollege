insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 1), (select grupoId from anki2.grupo order by 1 limit 1), (select permissaoId from anki2.permissao order by 1 limit 1));
insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 1,1), (select grupoId from anki2.grupo order by 1 limit 1), (select permissaoId from anki2.permissao order by 1 limit 1,1));
insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 2,1), (select grupoId from anki2.grupo order by 1 limit 1), (select permissaoId from anki2.permissao order by 1 limit 1));
insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 3,1), (select grupoId from anki2.grupo order by 1 limit 1,1), (select permissaoId from anki2.permissao order by 1 limit 1));
insert into usuario_grupo (usuarioId , grupoId , permissaoId) values ((select usuarioid from anki2.usuario order by 1 limit 4,1), (select grupoId from anki2.grupo order by 1 limit 1,1), (select permissaoId from anki2.permissao order by 1 limit 1,1));
