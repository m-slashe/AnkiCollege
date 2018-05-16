<?php
	$deckDao = new DeckDAO();
    $deck = $deckDao->getDeckById($_GET['id']);

    echo 'Perguntas:';
    $deck->escreverPerguntas();

