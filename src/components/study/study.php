<?php $cards = $params ?>
<?php include_once 'study.css' ?>
<?php include_once 'study.js' ?>
<div id="study">
    <div id="pergunta"><?php echo $cards[0]->pergunta ?></div>
    <div id="resposta"><?php echo $cards[0]->resposta ?></div>
    <div class="container align-bottom">
        <div id="button-show-answer" class="row">
            <button class="btn btn-dark" style="width: 100%" onclick="verResposta()">Ver resposta</button>
        </div>
        <div>
        </div>
        <div id="buttons-answers" style="display: none" class="row">
            <div class="col">
                <button class="btn btn-danger" style="width: 100%">Repetir</button>
            </div>
            <div class="col">
                <button class="btn btn-success" style="width: 100%">Facil</button>
            </div>
            <div class="col">
                <button class="btn btn-primary" style="width: 100%">Dificil</button>
            </div>
        </div>
    </div>
</div>