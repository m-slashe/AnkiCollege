<?php
   
  class Conexao {
   
      private static $instance;
   
      public static function getInstance() {
          try{
              self::$instance = new PDO('mysql:host=localhost;dbname=Anki2', 'root', '', array(PDO::ATTR_PERSISTENT => true));  //Dados de conexão
          } catch ( PDOException $e ){
              echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
          }
          return self::$instance;
      }
   
  }
