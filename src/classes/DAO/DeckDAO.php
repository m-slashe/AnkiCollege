<?php

class DeckDAO{

	function __construct(){
		$this->conn = Conexao::getInstance();
	}

	public function getDeckById($id){
		$perguntas = [];
		$sql = " select d.nome nome,
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
	                    where d.deckId=:DeckID;";
	    $stmt = $this->conn->prepare( $sql );
	    //Parametros para o bindParam
	    //PDO::PARAM_BOOL
	    //PDO::PARAM_NULL
	    //PDO::PARAM_INT
	    //PDO::PARAM_STR (default)
	    //PDO::PARAM_LOB
	    $stmt->bindParam( ':DeckID', $id, PDO::PARAM_INT);
	    $result = $stmt->execute();
	    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);	//FETCH_ASSOC retorna apenas o map (Key=>Value)

	    foreach ($rows as $row) {
	        array_push($perguntas,new Card($row['perguntaId'],$row['pergunta'],$row['resposta']));
	        $categoria = $row['categoria'];
	        $nome = $row['nome'];
	        $id = $row['deckId'];
	    }
	    return new Deck($perguntas, $categoria, $nome, $id);
	}

	public function getDecksByUser($userId){
		$perguntas = [];
		$sql = " select deckId  
	                    from deck_usuario
	                    where usuarioId=:UserID;";
	    $stmt = $this->conn->prepare( $sql );
	    $stmt->bindParam( ':UserID', $userId, PDO::PARAM_INT);
	    $result = $stmt->execute();
	    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    $decks = [];

	    foreach ($rows as $row) {
	        array_push($decks, $this->getDeckById($row['deckId']));
	    }
	    return $decks;
	}

}