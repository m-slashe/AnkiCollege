<?php
    $cards = array(new Card(1,'Pergunta1', 'Resposta1sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssResposta1sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
                   new Card(2,'Pergunta2', 'Resposta2'),
                   new Card(3,'Pergunta3', 'Resposta3'),
                   new Card(4,'Pergunta4', 'Resposta4'),
                   new Card(5,'Pergunta5', 'Resposta5'),
                   new Card(6,'Pergunta6', 'Resposta6'),
               );

    foreach($cards as $card){
        include(__DIR__ .'/../card/card.php');
    }
?>