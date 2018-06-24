<?php

class GroupModel {
    protected $id;
    protected $nome;

    function __construct($nome, $id){
        $this->nome=$nome;
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }

}