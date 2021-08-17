<?php
 require_once "creatdb.php";
 require_once "formhtml.php";
//_________________________________Create table_____________________________________________________________________
   $db_connection= new mysqli($server_name, $user_name, $password,$db);
$table_craet="CREATE TABLE akform_table(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                        dbfname VARCHAR(30) NOT NULL,
                                        dbmname VARCHAR(30) NOT NULL,
                                        dblname VARCHAR(30) NOT NULL,
                                        dbage   INT(10) UNSIGNED NOT NULL,
                                        dbgender VARCHAR(7) NOT NULL,
                                        dbBdate  VARCHAR(30) NOT NULL,
                                        dbemail  VARCHAR(30) NOT NULL,
                                        dbwebsit VARCHAR(100),
                                        dbphone  INT(13) UNSIGNED NOT NULL,
                                        dbkebele VARCHAR(30) NOT NULL)";
if($db_connection->query($table_craet)|| $db_connection->error=="Table 'akform_table' already exists")
{
echo "";
}  
else { echo "<br>Table not Created due to " . $db_connection->error;}
if(!(empty($_POST["Fname"]) || empty($_POST["Mname"]) || empty($_POST["Lname"]))){
//_________________________________Insert data to table_____________________________________________________________________
$enter_data=$db_connection->prepare("INSERT INTO akform_table(dbfname, dbmname, dblname, dbage, dbgender, dbBdate, dbemail, dbwebsit, dbphone, dbkebele)
                                                 VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
 //$enter_data=bind_param("ssssssssss", $fname, $mname, $lname, $age, $gender, $birth, $email, $web, $phon, $dbkebele); 
 
 $enter_data->bind_param("ssssssssss", $fname, $mname, $lname, $age, $gender, $birth, $email, $web, $phon, $Kselect); 
 $enter_data->execute();
}
?>