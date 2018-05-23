<?php

class UserDAO extends AbstractDAO {

	public function getByIdStatement() {
		return "select nome,
	                   sobrenome,
	                   email,
	                   username
	            from anki2.usuario 
	            where usuarioId=:id;";
	}

	public function getByUserStatement() {}

	public function getUserById($id){
		$rows = parent::getById($id);

		$row = $rows[0];

        $email = $row['email'];
        $username = $row['username'];

        $deckDao = new DeckDAO();
        $decks = $deckDao->getByUser($id);

        $groupDao = new GroupDAO();
        $groups = $groupDao->getByUser($id);

	    return new Usuario($id, $username, $email, $groups, $decks);    
	}

}