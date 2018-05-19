<?php

class Deck {
    protected $id;
    protected $categoria;
    protected $nome;
    protected $perguntas;
    protected $usuarios;
    protected $grupos;

    function __construct($perguntas, $categoria, $nome, $id){
        $this->perguntas=$perguntas;
        $this->categoria=$categoria;
        $this->nome=$nome;
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }

    function escreverPerguntas(){
        foreach($this->perguntas as $pergunta){
            includeComponent('card', $pergunta);
        }
    }

}