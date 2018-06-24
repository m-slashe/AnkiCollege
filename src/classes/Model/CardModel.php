<?php

class CardModel {

    public $pergunta;
    public $resposta;

    function __construct($id, $pergunta, $resposta){
        $this->id = $id;
        $this->pergunta = $pergunta;
        $this->resposta = $resposta;
    }

    function getId(){
        return $this->id;
    }

    function getPergunta(){
        return $this->pergunta;
    }

    function getResposta(){
        return $this->resposta;
    }

}