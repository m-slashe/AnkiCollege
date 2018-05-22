<?php

function includeComponent($component, $params=null){
    include(ABSPATH . 'src' . DS . 'components' . DS . $component . DS . $component . '.php');
}

function includeForm($component){
    include(ABSPATH . 'src' . DS . 'components' . DS . 'form' . DS . $component . '.php');
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

function executeStatement($sql, $params){
	$stmt = Conexao::getInstance()->prepare( $sql );
	foreach ($params as $key => $value) {
		$stmt->bindValue($key, $value);
	}
    $result = $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function getUser($login, $senha){
    $sql = "select u.usuarioId
            from anki2.usuario u 
            where u.username=:username 
              and u.password=md5(concat(:password,:username))";
        $stmt = Conexao::getInstance()->prepare( $sql );
        $stmt->bindParam( ':username', $login);
        $stmt->bindParam( ':password', $senha);
        $result = $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
}