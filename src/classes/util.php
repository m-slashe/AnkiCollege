<?php

function includeComponent($component, $params=null){
    include(ABSPATH . 'src' . DS . 'components' . DS . $component . DS . $component . '.php');
}

function includeMenuComponent($componentName, $objectArray, $icon=''){
	echo '<a class="list-group-item list-group-item-dark collapsed" data-toggle="collapse" data-parent="#sidebar" href="#'.$componentName.'">';

	echo $icon.' '.$componentName.' <span class="badge badge-dark badge-pill">'.count($objectArray).'</span></a>';

	echo '<div class="collapse" id="'.$componentName.'">';
	foreach ($objectArray as $object) {
		echo "<a class='list-group-item list-group-item-dark subitem' data-parent='#sidebar' href='/".$componentName."?id=".$object->getId()."'>".$object->getNome()."</a>";
    }
	echo '</div>';
}