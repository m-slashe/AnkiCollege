<?php

class DeckModel {
    protected $id;
    protected $categoria;
    protected $nome;
    protected $cards;
    protected $usuarios;
    protected $grupos;

    function __construct($cards, $categoria, $nome, $id) {
        $this->cards = $cards;
        $this->categoria = $categoria;
        $this->nome = $nome;
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCards() {
        return $this->cards;
    }

}