<?php
    $cards = array(new Card('Pergunta1', 'Resposta1'),
                   new Card('Pergunta2', 'Resposta2'),
                   new Card('Pergunta3', 'Resposta3'));

    foreach($cards as $card){
        include(__DIR__ .'/../card/card.php');
    }
?>