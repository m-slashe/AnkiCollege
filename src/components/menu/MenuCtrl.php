<?php

class MenuCtrl {

    function main() {
        include_once 'menu.php';
    }

    static function includeMenuComponent($componentName, $objectArray, $icon = '') {
        echo '<a class="list-group-item list-group-item-dark collapsed" data-toggle="collapse" data-parent="#sidebar" href="#' . $componentName . '">';

        echo $icon . ' ' . $componentName . ' <span class="badge badge-dark badge-pill">' . count($objectArray) . '</span></a>';

        echo '<div class="collapse" id="' . $componentName . '">';
        foreach ($objectArray as $object) {
            echo "<a class='list-group-item list-group-item-dark subitem' data-parent='#sidebar' href='/App/child/" . $componentName . "/main" . "?id=" . $object->getId() . "'>" . $object->getNome() . "</a>";
        }
        echo "<a class='list-group-item list-group-item-dark subitem' data-parent='#sidebar' href='/App/child/" . $componentName . "/novo" . $componentName . "'> <i class=\"fas fa-plus-square\"></i> Novo ".$componentName."</a>";
        echo '</div>';
    }

}