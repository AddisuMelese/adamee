
<?php  
$id; 
  if(isset($_POST['ido'])){
                    //_________________________________Select data and display data_____________________________________________________________________
               
               $id="SELECT id FROM akform_table";
                $select_id=$db_connection->query($id);
                if($select_id->num_rows>0)
                {   echo "<table class='table1'><caption class='captionclass'><h2><mark> </mark></h2></caption>
                    <tr><th>ID List </th></tr>";
                    while($row=$select_id->fetch_assoc()) 
                    {
                        echo "<tr><td>" .$row['id'] . "</td></tr>";                      
                    }  
                    echo "</table>";              
                }
                else{echo "No result";}

                $db_connection->close();}
            ?>
        