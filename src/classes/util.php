<?php

class Util {

    static $menuLoaded = false;

    static function includeComponent($component, $params=null){
        include(ABSPATH . 'src' . DS . 'components' . DS . $component . DS . $component . '.php');
    }

    function includeForm($component){
        include(ABSPATH . 'src' . DS . 'components' . DS . 'form' . DS . $component . '.php');
    }

    static function executeStatement($sql, $params = []){
        $stmt = Conexao::getInstance()->prepare( $sql );
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $result = $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    static function carregaAcao($controller, $acao){
        $acaoArray = explode('?', $acao);
        $parametros = [];
        if(count($acaoArray) > 1){
            $namedParams = explode('&', $acaoArray[1]);
            foreach($namedParams as $key => $value){
                $param = explode('=', $value);
                array_push($parametros, $param[1]);
            }
        }
        $nomeAcao = $acaoArray[0];
        $nomeControlador = $controller . 'Ctrl';
        $controlador = new $nomeControlador;
        $controlador->$nomeAcao(...$parametros);
    }

    static function carregaControlador(){
        $paths = explode('/', $_SERVER['REQUEST_URI']);

        if($paths[0] == "" && $paths[1] == ""){
            header('location: \Login\Form');
        }else if(count($paths) > 3 && Util::$menuLoaded){
            Util::carregaAcao($paths[3], $paths[4]);
        } else{
            Util::$menuLoaded = true;
            Util::carregaAcao($paths[1], $paths[2]);
        }
    }

    static function loadChild(){
        $paths = explode('/', $_SERVER['REQUEST_URI']);
        if(count($paths) == 3){
            header('Location: \App\Child\Deck\Main');
        }else{
            Util::carregaControlador();
        }
    }
}