<?php $cards = $params ?>
<style><?php include_once 'study.css' ?></style>
<script><?php include_once 'study.js' ?></script>
<div id="study">
    <div><?php echo $cards[0]->pergunta ?></div>
    <div class="container align-bottom">
        <div id="button-show-answer" class="row">
            <button class="btn btn-dark" style="width: 100%" onclick="verResposta()">Ver resposta</button>
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