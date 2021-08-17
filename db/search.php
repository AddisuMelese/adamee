
<?php  
$searchid="";
$data=""; 
  if(isset($_POST['search'])){
                    //_________________________________Select data and display data_____________________________________________________________________
                    $searchid=$_POST['search1'];
                      $search="SELECT dbfname, dbmname, dblname FROM akform_table WHERE dbfname='$searchid' OR id='$searchid'";//ASC=assending DESC= desending
            /*
            ->ORDER id BETWEEN 2 AND 50 ; LIMITE 4,10;LIMIT 4; WHERE dbfname='name'; WHERE id="idd" AND fname="name";
            ->WHERE id="idd" AND fname="name" OR mname="name" !=WHERE id="idd" AND (fname="name" OR mname="name")
            ->WHERE dbfname IN ('addisu', 'melese', 'hailu')
            ->WHERE dbfname NOT IN ('addisu', 'melese', 'hailu')
            ->WHERE dbfname LIKE '%NEW'/'%NEW%'/'n%W' ;for search ingine
            ->SELECT dbfname, UPPER(dbname) FROM  table ;for one colloumen
            ->SELECT SUM(number) FROM  table ;for one colloumen
            ->SELECT  AVRG  (number) FROM  table ;for one colloumen
            ->SELECT COUNT(dbname) from table WHERE id=number
            ->SELECT AVRG(number) from table WHERE id=id-number or can ommit WHERE id=id-number to perform all
            ->SELECT COUNT(*) AS items,
                     SUM(number) AS sum,
                     AVRG(number) AS average,
                     MAX(number) AS maximum
                      FROM table WHERE id=number
            ->SELECT id, COUNT(*) AS item_counted FROM tablename GROUP BY idnumber
            ->SELECT id, COUNT(*) AS item_counted FROM tablename GROUP BY idnumber HAVING COUNT(*)>3 ORDER BY item-counted DESC
            ->SELECT id,dbname FROM tablename WHERE id>(SELECT id,AVRG(id) FROM tablename) ORDER BY id DESC
            ->SELECT dbname,MIN(id) FROM tablename WHERE dbname LIKE '%name' AND id IN(SELECT id FROM name LIKE '%name') 
            ->SELECT table1.id, table1.name, table2.id, table2.name FROM table1, table2 WHERE table1.id=number OREDER BY table1.id
            ->SELECT table1.name, table2.name FROM table1 RIGHT OUTER JOIN table2 ON table1.id=number OREDER BY table1.id
            ->SELECT dbfname, dbmname, dblname FROM akform_table WHERE id>number
                     UNION /UNION ALL
               SELECT dbfname, dbmname, dblname FROM akform_table WHERE dbfname >number2
               INSERT INO tablename('id','dbname', 'lname','mname') SELECT id, fname, mmname, llname FROM table2 
             ->ALTER TABLE tablename ADD colomname varchare(10) NOT NULL; to add column
             ->ALTER TABLE tablename DROP COLUMN colomname ; to delet column
             ->DROP TABLE tablename ; if i never want it
             ->RENAME TABLE oldtablename TO newtablename; to rename the existing table name
             ->CREATE VIEW teporarytablename AS
                SELECT id, fname, lname, result FROM tablename ORDER BY result DESC LIMIT 10
             ->CREATE VIEW teporarytablename AS
                 SELECT CONCAT('fname', ' ', 'mname', ' ', 'lname') AS fullname FROM tablename; view is not stor data it is fetch ony from the original table */
                $select_id=$db_connection->query($search);
                if($select_id->num_rows>0)
                {   echo "<table class='table1'><caption class='captionclass'><h2><mark> </mark></h2></caption>
                    <tr><th>Name </th></tr>";
                    while($row=$select_id->fetch_assoc()) 
                    {
                        echo "<tr><td>" . $row['dbfname'] . "</td><td>"
                                        . $row['dbmname'] . "</td><td>"
                                        . $row['dblname'] . "</td><td>";                      
                    }  
                    echo "</table>";              
                }
                else{echo "No result";}

                $db_connection->close();}
                function input_set1($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
            ?>
        