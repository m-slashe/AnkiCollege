<?php
	
	$form = '
			<form method="post" action="addpergunta">
				<label> Pergunta:
				<input type="text" name="pergunta" required>
				</label>
				<label> Resposta:
				<input type="text" name="resposta" required>
				</label>
				<input type="submit" value="Criar">
				<input type="hidden" name="deckid" value="'.$_POST['deckid'].'">
				<input type="hidden" name="type" value="new">
			</form>
			';
    if($_POST['type'] == 'showForm'){
        echo $form;
    }else{
        if ($_POST['type'] == 'delete') {
            $pergunta = $_POST['pergunta'];
            $queryPergunta = 'delete from pergunta where perguntaId=:pergunta';
            $paramPergunta = ['pergunta'=>$pergunta];
            executeStatement($queryPergunta, $paramPergunta);
        }elseif($_POST['type'] == 'new') {
            $pergunta = $_POST['pergunta'];
            $resposta = $_POST['resposta'];
            $deckid = $_POST['deckid'];
            $queryResposta = 'insert into resposta(texto) value(:resposta)';
            $paramResposta = ['resposta'=>$resposta];
            executeStatement($queryResposta, $paramResposta);
            $respostaId = Conexao::getInstance()->lastInsertId();
            $queryPergunta = 'insert into pergunta(respostaId, deckId, texto, criador, dataCriacao) value(:resposta, :deck, :pergunta, :usuario, CURRENT_TIMESTAMP)';
            $paramPergunta = ['resposta'=>$respostaId, 'deck'=>$deckid, 'pergunta'=>$pergunta, 'usuario'=>$_SESSION['id']];
            executeStatement($queryPergunta, $paramPergunta);
            header('location:Deck?id='.$deckid);
        }
     }

