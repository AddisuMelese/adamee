
<?php  
$id; 
  if(isset($_POST['fn'])){
                    //_________________________________Select data and display data_____________________________________________________________________
               
               $name="SELECT id, dbfname, dbmname, dblname FROM akform_table ORDER BY dbfname DESC";//ASC=assending DESC= desending
            //ORDER id BETWEEN 2 AND 50 ; LIMITE 4,10;LIMIT 4;
                $select_id=$db_connection->query($name);
                if($select_id->num_rows>0)
                {   echo "<table class='table1'><caption class='captionclass'><h2><mark> </mark></h2></caption>
                    <tr><th>Full name </th></tr>";
                    while($row=$select_id->fetch_assoc()) 
                    {
                        echo "<tr><td>" . $row['id'] . "</td><td>"
                        . $row['dbfname'] . "</td><td>"
                        . $row['dbmname'] . "</td><td>"
                        . $row['dblname'] . "</td><td>";                      
                    }  
                    echo "</table>";              
                }
                else{echo "No result";}

                $db_connection->close();}
            ?>
        