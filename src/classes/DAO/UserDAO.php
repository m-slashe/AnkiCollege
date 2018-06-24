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

    public function getByUserStatement() {
    }

    public function getUserById($id) {
        if (USE_DATABASE) {
            $rows = parent::getById($id);
            $row = $rows[0];
            $email = $row['email'];
            $username = $row['username'];
        } else {
            $email = 'teste';
            $username = 'seila';
        }

        $deckDao = new DeckDAO();
        $decks = $deckDao->getByUser($id);

        $groupDao = new GroupDAO();
        $groups = $groupDao->getByUser($id);

        return new UserModel($id, $username, $email, $groups, $decks);
    }

    function getUser($login, $senha) {
        if (USE_DATABASE) {
            $sql = "select u.usuarioId
            from anki2.usuario u 
            where u.username=:username 
              and u.password=md5(concat(:password,:username))";
            $stmt = Conexao::getInstance()->prepare($sql);
            $stmt->bindParam(':username', $login);
            $stmt->bindParam(':password', $senha);
            $result = $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }else{
            return new UserModel(1, 'teste', 'seila');
        }
    }

}