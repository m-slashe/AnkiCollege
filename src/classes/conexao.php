<?php

class Conexao {

    public static $instance;

    private function __construct() {
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO(DB_CONNECTIONSTRING, DB_USERNAME, DB_PASSWORD);
            } catch (PDOException $e) {
                echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
            }

        }
        return self::$instance;
    }

}
