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
	    return new GroupModel($nome, $id);
	}

	public function getByUserStatement(){
		return "select grupoId from usuario_grupo where usuarioId=:id;";
	}

	public function getByUser($id){
        $grupos = [];
	    if(USE_DATABASE){
            $rows = parent::getByUser($id);
            foreach ($rows as $row) {
                array_push($grupos, $this->getById($row['grupoId']));
            }
        }else{
	        array_push($grupos, new GroupModel('teste', 1));
        }

	    return $grupos;
	}

}