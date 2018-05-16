<div class="col-md-10 scrollbar" id="app-content">
<?php
    include_once ABSPATH.'src'.DS.'classes'.DS.'util.php';
    $cards = array(new Card(1,'Quanto é 1 + 1?', '2'),
                   new Card(2,'Pergunta2', 'Resposta2'),
                   new Card(3,'Pergunta3', 'Resposta3'),
                   new Card(4,'Pergunta4', 'Resposta4'),
                   new Card(5,'Pergunta5', 'Resposta5'),
                   new Card(6,'Pergunta6', 'Resposta6'),
               );

    $request_url = explode('?', $_SERVER['REQUEST_URI'], 2);
    switch ($request_url[0]) {
        case '/profile':
            includeComponent('profile');
            break;
        case '/config':
            includeComponent('config');
            break;
        case '/teste':
            includeComponent('teste');
            break;
        case '/study':
            includeComponent('study', $cards);
            break;
        case '/Deck':
            includeComponent('deck');
            break;
        case '/login':
            includeComponent('login');
            break;
        default:
            foreach($cards as $card){
                includeComponent('card', $card);
            }
    }
    ?>
</div>
