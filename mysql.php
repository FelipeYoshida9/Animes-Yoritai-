<?php

      class mysql{
		 private static $pdo;
		 
	     public static function conectar(){
			 if(self::$pdo == null){
				 try{
			         self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::
					 MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					 self::$pdo->settribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION,PDO::ERRMODE_EXCEPTION);
				 }catch(Exception $e){
			      echo '<h1 style="color:red;">Erro ao conectar com banco de dados:(<h1>';
				     }
			    }
			return self::$pdo;
			 
			 
		 }
	  
	  
	  }
?>