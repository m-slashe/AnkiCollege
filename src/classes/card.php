<?php

class Card {

    public $pergunta;
    public $resposta;

    function __construct($id, $pergunta, $resposta){
        $this->id = $id;
        $this->pergunta = $pergunta;
        $this->resposta = $resposta;
    }

}