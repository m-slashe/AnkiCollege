<?php

class DeckCtrl {

    function main($id){
        $deckDao = new DeckDAO();
        $deck = $deckDao->getById($id);
        $this->escreverPerguntas($deck);
        include_once 'deck.php';
    }

    function novaPergunta($id){
        include_once 'criarPergunta.php';
    }

    function escreverPerguntas(DeckModel $deck){
        $cardController = new CardCtrl();
        $cards = 0;
        foreach($deck->getCards() as $card){
            if($card->getPergunta()==''){
            }else{
                $cardController->form($card);
                $cards++;
            }
        }
        if($cards == 0 ){
            echo 'O Deck ainda não possui cards';
        }
    }

    function delete(){
        $sql = 'delete from pergunta where perguntaId = :pergunta';
        $params['pergunta'] = $_POST['pergunta'];
        Util::executeStatement($sql, $params);
    }

    function criarPergunta($id){
        $params['resposta'] = $_POST['resposta'];
        $sql = 'insert into resposta(texto) values(:resposta)';
        Util::executeStatement($sql, $params);
        $params = [];
        $params['deckId'] = $id;
        $params['texto'] = $_POST['pergunta'];
        $params['usuario'] = $_SESSION['id'];
        $sql = 'insert into pergunta(respostaId, deckId, texto, criador, dataCriacao) VALUES (LAST_INSERT_ID(), :deckId,
                :texto, :usuario, CURRENT_TIMESTAMP())';
        Util::executeStatement($sql, $params);
        header("Location: \App\Child\Deck\main?id=$id");
    }

    function novoDeck(){
        $sql = 'select categoriaId, nome from categoria';
        $categorias = Util::executeStatement($sql);
        include_once 'criarDeck.php';
    }

    function criarDeck(){
        $params['categoria'] = $_POST['categoria'];
        $params['nome'] = $_POST['nome'];
        $sql = 'insert into deck(categoriaId, nome) VALUES(:categoria,:nome)';
        Util::executeStatement($sql, $params);
        $sql = 'select LAST_INSERT_ID() deckId from dual';
        $rows = Util::executeStatement($sql, $params);
        $deckid = $rows[0]['deckId'];
        $params = [];
        $params['usuario'] = $_SESSION['id'];
        $params['deckid'] = $deckid;
        $sql = 'insert into deck_usuario(usuarioId, deckId) VALUES(:usuario, :deckid)';
        Util::executeStatement($sql, $params);
        header("Location: \App\Child\Deck\main?id=$deckid");
    }

}