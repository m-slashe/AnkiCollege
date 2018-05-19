<?php

class GroupDAO{

	function __construct(){
		$this->conn = Conexao::getInstance();
	}

	public function getGroupById($id){
		$perguntas = [];
		$sql = " select nome  
	                    from grupo
	                    where grupoId=:GrupoID;";
	    $stmt = $this->conn->prepare( $sql );
	    //Parametros para o bindParam
	    //PDO::PARAM_BOOL
	    //PDO::PARAM_NULL
	    //PDO::PARAM_INT
	    //PDO::PARAM_STR (default)
	    //PDO::PARAM_LOB
	    $stmt->bindParam( ':GrupoID', $id, PDO::PARAM_INT);
	    $result = $stmt->execute();
	    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);	//FETCH_ASSOC retorna apenas o map (Key=>Value)

	    foreach ($rows as $row) {
	        $nome = $row['nome'];
	    }
	    return new Grupo($nome, $id);
	}

	public function getGroupsByUser($userId){
		$perguntas = [];
		$sql = " select grupoId  
	                    from usuario_grupo
	                    where usuarioId=:UserID;";
	    $stmt = $this->conn->prepare( $sql );
	    $stmt->bindParam( ':UserID', $userId, PDO::PARAM_INT);
	    $result = $stmt->execute();
	    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    $grupos = [];

	    foreach ($rows as $row) {
	        array_push($grupos, $this->getGroupById($row['grupoId']));
	    }
	    return $grupos;
	}

}