<?php
      $title="Home";
      require_once "includes/header.php";
      echo "<form method='POST'>"; 
      echo "<input type='submit' value ='Display' name='display'>";
      echo "<input type='submit' value ='Fullname' name='fn'>";
      echo "<input type='submit' value ='ID' name='ido'>";
      echo '<input type="text" name="search1" placeholder="Enter id/Fname">';
      echo "<input type='submit' value ='Search' name='search'>";
      echo "</form >"; 
      require_once "db/Enterdata.php";
      include "db/display.php";
      include_once "db/formhtml.php";
      include "db/ID.php";
      include "db/Full_Name.php";
      include "db/search.php";
 ?>
  <br>
  <br>
  <br>
  <br> 
<?php
  require_once "includes/footer.php";
?> 


