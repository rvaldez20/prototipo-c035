<?php 
   $dbHost = 'localhost';
   $dbName = 'norma035';
   $dbUser = 'userprueba';
   $dbPassword = '';

   // configuración de la Base de Datos
   try{
      $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", "$dbUser", "$dbPassword");
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   } catch(Exception $e){
      echo $e->getMessage();
   }

