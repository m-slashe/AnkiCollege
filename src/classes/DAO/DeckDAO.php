<?php

class DeckDAO extends AbstractDAO{

	public function getByIdStatement(){
		return "select d.nome nome,
						d.deckId,
	                    c.nome categoria,
	                    p.perguntaId perguntaId,
	                    p.texto pergunta,
	                    r.texto resposta, 
	                    u.username criador  
	                    from anki2.deck d  
	                    inner join anki2.pergunta p  using(deckId)  
	                    inner join anki2.resposta r  using(respostaId)  
	                    inner join anki2.usuario u  on u.usuarioId = p.criador  
	                    inner join anki2.categoria c  using(categoriaId)
	                    where d.deckId=:id;";
	}

	public function getById($id){
        if(USE_DATABASE){
            $rows = parent::getById($id);
            $perguntas = [];
            foreach ($rows as $row) {
                array_push($perguntas,new CardModel($row['perguntaId'],$row['pergunta'],$row['resposta']));
                $categoria = $row['categoria'];
                $nome = $row['nome'];
                $id = $row['deckId'];
            }
            return new DeckModel($perguntas, $categoria, $nome, $id);
        }else{
            $cards = [];
            array_push($cards,new CardModel(1,'maoi','hihi'));
            array_push($cards,new CardModel(2,'outro','gato'));
            return new DeckModel($cards, 'seila2', 'seila', 1);
        }
	}

	public function getByUserStatement(){
		return "select deckId from deck_usuario where usuarioId=:id;";
	}

	public function getByUser($id){
        $decks = [];
	    if(USE_DATABASE){
            $rows = parent::getByUser($id);
            foreach ($rows as $row) {
                array_push($decks, $this->getById($row['deckId']));
            }
        }else{
	        array_push($decks, new DeckModel('?df', 'sdf', 'f', 1));
        }

	    return $decks;
	}

}