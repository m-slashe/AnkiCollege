<?php

class CardCtrl {

    function form($card){
        if(!isset($card)){
            $card = new CardModel(1,'Quanto é 1 + 1?', '2');
        }
        require_once 'CardTemplate.php';
        $cardTemplate = new CardTemplate();
        $cardTemplate->initial($card);
    }

}