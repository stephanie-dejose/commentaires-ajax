<?php
// Connexion à la base de données

 $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
 $param = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

 try {
      $connexion = new PDO($dsn,DB_USER,DB_PWD,$param);
 }
 catch (PDOException $e) {
   var_dump($e);
      die("Problème de connexion à la base de données...");
 }
