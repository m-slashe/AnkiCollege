<?php

class UserDAO{

	function __construct(){
		$this->conn = Conexao::getInstance();
	}

	public function getUserById($id){
		$decks = [];
		$grupos = [];
		$sql = " select nome,
	                    sobrenome,
	                    email,
	                    username
	                    from anki2.usuario 
	                    where usuarioId=:UserID;";
	    $stmt = $this->conn->prepare( $sql );
	    $stmt->bindValue( ':UserID', $id, PDO::PARAM_INT);
	    $result = $stmt->execute();
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $nome = $row['nome'];
        $email = $row['email'];
        $username = $row['username'];
        $userId = $id;

	    $deckDao = new DeckDAO();
        $decks = $deckDao->getDecksByUser($id);

        $groupDao = new GroupDAO();
        $groups = $groupDao->getGroupsByUser($userId);

	    return new Usuario($id, $username, $email, $groups, $decks);
	}

	/*

	public function getDecksByUser($id){
		$perguntas = [];
		$sql = " select d.nome nome,
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
	    }
	    return new Deck($perguntas, $categoria, $nome);
	}
	*/

}