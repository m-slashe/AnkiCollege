<?php

abstract class AbstractDAO{

	public abstract function getByIdStatement();
	public abstract function getByUserStatement();

	public function getById($id){
		return Util::executeStatement($this->getByIdStatement(), array(':id'=>$id));
	}

	public function getByUser($id){
		return Util::executeStatement($this->getByUserStatement(), array(':id'=>$id));
	}

}
