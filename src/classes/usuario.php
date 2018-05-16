<?php

class Usuario {
    protected $id;
    protected $username;
    protected $email;
    protected $grupos;
    protected $decks;

    function __construct($id, $username, $email, $grupos, $decks){
        $this->decks=$decks;
        $this->grupos=$grupos;
        $this->email=$email;
        $this->username=$username;
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getGrupos(){
        return $this->grupos;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getDecks(){
        return $this->decks;
    }

}