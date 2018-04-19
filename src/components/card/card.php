<style> <?php include_once 'card.css'; ?> </style>

<div class="card">
    <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree-<?php echo $card->id ?>">
            <?php echo $card->pergunta ?>
        </a>
        
        <a style="float:right" href="#">
            <i class="fas fa-trash-alt"></i>
        </a>
        <a style="float:right; padding-right: 5px" href="#">
            <i class="fas fa-edit"></i>
        </a>

    </div>
    <div id="collapseThree-<?php echo $card->id ?>" class="collapse" data-parent="#accordion">
        <div class="card-body">
            <?php echo $card->resposta ?>
        </div>
    </div>
</div>

