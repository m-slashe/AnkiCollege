<?php

class GroupDAO extends AbstractDAO{

	public function getByIdStatement(){
		return "select nome from grupo where grupoId=:id;";
	}

	public function getById($id){
		$rows = parent::getById($id);
	    foreach ($rows as $row) {
	        $nome = $row['nome'];
	    }
	    return new Grupo($nome, $id);
	}

	public function getByUserStatement(){
		return "select grupoId from usuario_grupo where usuarioId=:id;";
	}

	public function getByUser($id){
		$rows = parent::getByUser($id);
	    $grupos = [];
	    foreach ($rows as $row) {
	        array_push($grupos, $this->getById($row['grupoId']));
	    }
	    return $grupos;
	}

}