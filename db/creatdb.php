<?php
   $server_name="localhost";
   $user_name="root";
   $password="";
   $charset="utf8mb4";
   //_________________________________Connect db_____________________________________________________________________
   $db_connection= new mysqli($server_name, $user_name, $password);//connect the php with database
   if($db_connection->connect_error)//check the connection of db
   {
       die("Not connected Beceause " );
   }
   
   //_________________________________Create db_____________________________________________________________________
   $creat_db="CREATE DATABASE ak_database";
   
   if($db_connection->query($creat_db) || $db_connection->error=="Can't create database 'akdb_form'; database exists")//check the bd create
   {
       echo "<br>Database Created";
   }
   else {echo "";}
   //_________________________________Other_____________________________________________________________________
   $db="ak_database";
   $dsn="mysql:host=$server_name;dbname=$db;charset=$charset";//data source name
   try{
    $pdo= new PDO($dsn, $user_name,$password);
   
   }
   catch (PDOException $e){
     throw new pdoException($e->getMessage()); 
   }
   
 

?>