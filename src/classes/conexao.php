<?php
   
  class Conexao {
   
      public static $instance;
   
      private function __construct() {
          
      }
   
      public static function getInstance() {
          if (!isset(self::$instance)) {  //Checa se já existe uma instância;
              try
              {
                  self::$instance = new PDO('mysql:host=localhost;dbname=Anki2', 'root', '28091998');  //Dados de conexão
              }
              catch ( PDOException $e )
              {
                  echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
              }
                
            }
          return self::$instance;
      }
   
  }