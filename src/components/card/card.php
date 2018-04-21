<style> <?php include_once 'card.css'; ?> </style>

<div class="card">
    <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree-<?php echo $card->id ?>">
            <?php echo $card->pergunta ?>
        </a>

        <div class="options">
            <a href="#"><i class="fas fa-edit"></i></a>
            <a href="#"><i class="fas fa-trash-alt"></i></a>
        </div>
    </div>

    <div id="collapseThree-<?php echo $card->id ?>" class="collapse" data-parent="#accordion">
        <div class="card-body">
            <?php echo $card->resposta ?>
        </div>
    </div>
</div>

