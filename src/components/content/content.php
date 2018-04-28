<?php

    $cards = array(new Card(1,'Pergunta1', 'Resposta1'),
                   new Card(2,'Pergunta2', 'Resposta2'),
                   new Card(3,'Pergunta3', 'Resposta3'),
                   new Card(4,'Pergunta4', 'Resposta4'),
                   new Card(5,'Pergunta5', 'Resposta5'),
                   new Card(6,'Pergunta6', 'Resposta6'),
               );

    $request_url = $_SERVER['REQUEST_URI'];
    switch ($request_url) {
      case '/profile':
        include(ABSPATH . 'src' . DS . 'components' . DS . 'profile' . DS . 'profile.php');
        break;

      case '/config':
        include(ABSPATH .'src' . DS . 'components' . DS . 'config' . DS . 'config.php');
        break;

      case '/teste':
        include(ABSPATH .'src' . DS . 'components' . DS . 'teste' . DS . 'teste.php');
        break;

      default:
        foreach($cards as $card){
            include(ABSPATH .'src' . DS . 'components' . DS . 'card' . DS . 'card.php');
        }
        break;
    }
