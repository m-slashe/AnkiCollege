<?php

abstract class AbstractDAO{

	function __construct(){
		$this->conn = Conexao::getInstance();
	}

	public abstract function getByIdStatement();
	public abstract function getByUserStatement();

	public function getById($id){
		return executeStatement($this->getByIdStatement(), array(':id'=>$id));
	}

	public function getByUser($id){
		return executeStatement($this->getByUserStatement(), array(':id'=>$id));
	}

}