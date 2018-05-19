<?php $card = $params ?>
<style><?php include_once 'card.css' ?></style>
<script><?php include_once 'card.js' ?></script>
<div class="card">
    <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree-<?php echo $card->id ?>">
            <?php echo $card->pergunta ?>
        </a>
        <div class="options">
            <a href="#" onclick="editCard(<?php echo $card->id ?>)" ><i class="fas fa-edit"></i></a>
            <a href="#" onclick="deleteCard(<?php echo $card->id ?>)" ><i class="fas fa-trash-alt"></i></a>
        </div>
    </div>
    <div id="collapseThree-<?php echo $card->id ?>" class="collapse">
        <div class="card-body">
            <?php echo $card->resposta ?>
        </div>
    </div>
</div>