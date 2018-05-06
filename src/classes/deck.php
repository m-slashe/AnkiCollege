<?php

class Deck {
    protected $id;
    protected $categoria;
    protected $nome;
    protected $perguntas;
    protected $usuarios;
    protected $grupos;

    function __construct($perguntas, $categoria, $nome){
        $this->perguntas=$perguntas;
        $this->categoria=$categoria;
        $this->nome=$nome;
    }

    function escreverPerguntas(){
        foreach($this->perguntas as $pergunta){
            includeComponent('card', $pergunta);
        }
    }
}