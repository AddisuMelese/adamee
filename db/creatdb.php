<?php
   /*
   $server_name="localhost";
   $user_name="root";
   $password="";
   $db="ak_database";
   $charset="utf8mb4";
   */
  //Remot database
  $server_name="remotemysql.com";
   $user_name="Ud4XBgHcJB";
   $password="xmAYY3STiz";
   $db="Ud4XBgHcJB";
   $charset="utf8mb4";
   //_________________________________Connect db_____________________________________________________________________
   $db_connection= new mysqli($server_name, $user_name, $password);//connect the php with database
   if($db_connection->connect_error)//check the connection of db
   {
       die("Not connected Beceause " );
   }
   
   //_________________________________Create db_____________________________________________________________________
   $creat_db="CREATE DATABASE ak_database";
   $db_connection= new mysqli($server_name, $user_name, $password, $db);
   if($db_connection->query($creat_db) || $db_connection->error=="Can't create database 'akdb_form'; database exists")//check the bd create
   {
       echo "<br>Database Created";
   }
   
   else {echo "";}
   //_________________________________Other_____________________________________________________________________
   
   $dsn="mysql:host=$server_name;dbname=$db;charset=$charset";//data source name
   try{
    $pdo= new PDO($dsn, $user_name,$password);
   
   }
   catch (PDOException $e){
     throw new pdoException($e->getMessage()); 
   }
   
 

?>