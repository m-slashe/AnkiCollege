<?php
	$deckDao = new DeckDAO();
    $deck = $deckDao->getById($_GET['id']);

    echo 'Perguntas:';
    $deck->escreverPerguntas();
?>

<form action="addpergunta" method="post">
	<input type="submit" name="" value="Nova Pergunta">
	<input type="hidden" name="deckid" value="<?php echo $_GET['id']; ?>">
	<input type="hidden" name="type" value="showForm">
</form>
