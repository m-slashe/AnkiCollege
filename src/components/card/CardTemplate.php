<?php

class CardTemplate {

    function initial(CardModel $card) {
        include_once 'card.css';
        include_once 'card.js';
        echo '<div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree-' . $card->getId() . '">
                        ' . $card->getPergunta() . '
                    </a>
                    <div class="options">
                        <a href="#" onclick="editCard(' . $card->getId() . ')" ><i class="fas fa-edit"></i></a>
                        <a href="#" onclick="deleteCard(' . $card->getId() . ')" ><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                <div id="collapseThree-' . $card->id . '" class="collapse">
                    <div class="card-body">
                        ' . $card->getResposta() . '
                    </div>
                </div>
            </div>';
    }

}
