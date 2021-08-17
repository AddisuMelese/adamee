
<?php
if(isset($_POST['display'])){
            
               
                //_________________________________Select data and display data_____________________________________________________________________
               
               $select="SELECT id, dbfname, dbmname, dblname, dbage, dbgender, dbBdate, dbemail, 
                                dbwebsit, dbphone, dbkebele FROM akform_table ORDER BY dbfname, dbmname ";
                $select_result=$db_connection->query($select);
                if($select_result->num_rows>0)
                {   echo "<table class='table1'><caption class='captionclass'><h2><mark>Students List</mark></h2></caption>
                    <tr><th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th>
                    <th>Age</th><th>Gender</th><th>Birth Date</th><th>E-mail Address</th>
                    <th>Website</th><th>Phone Number</th><th>Kebele</th></tr>";
                    while($row=$select_result->fetch_assoc()) 
                    {
                        echo "<tr><td>" . $row['id'] . "</td><td>"
                                        . $row['dbfname'] . "</td><td>"
                                        . $row['dbmname'] . "</td><td>"
                                        . $row['dblname'] . "</td><td>"
                                        . $row['dbage'] . "</td><td>"
                                        . $row['dbgender'] . "</td><td>"
                                        . $row['dbBdate'] . "</td><td>"
                                        . $row['dbemail'] . "</td><td>"
                                        . $row['dbwebsit'] . "</td><td>"
                                        . $row['dbphone'] . "</td><td>"
                                        . $row['dbkebele'] . "</td><td>";
                    }  
                    echo "</table>";              
                }
                else{echo "No result";}

                $db_connection->close();}
            ?>
        