<?php

class DeckCtrl {

    function main($id){
        $deckDao = new DeckDAO();
        $deck = $deckDao->getById($id);
        $this->escreverPerguntas($deck);
    }

    function escreverPerguntas(DeckModel $deck){
        $cardController = new CardCtrl();
        foreach($deck->getCards() as $card){
            $cardController->form($card);
        }
    }

}