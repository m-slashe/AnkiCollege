<?php
   
  class Conexao {
   
      public static $instance;
   
      public static function getInstance() {
          if (!isset(self::$instance)) {  //Checa se já existe uma instância;
              try
              {
                  self::$instance = new PDO(DB_CONNECT_STRING, DB_USER, DB_PASSWORD);  //Dados de conexão
              }
              catch ( PDOException $e )
              {
                  echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
              }
                
            }
          return self::$instance;
      }
   
  }