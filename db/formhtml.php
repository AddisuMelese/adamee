<?php include "errorhandle.php"; ?>

<p><h3 class="error">* Required &amp; non optional field</h3></p>
<!--<form method="get" action="success.php">-->
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>"> 
    <div class="mb-3"><lable>First Name:</lable>
         <input type= "text" class="form-control" name= "Fname" placeholder="Only string" >
          <span class="error"> * <?php echo $fnameR; ?></span>
    </div>

    <div class="mb-3"><lable>Midle Name:</lable>
        <input type= "text" class="form-control" name= "Mname" placeholder="Only string">
        <span class="error"> * <?php echo $mnameR; ?></span>
    </div>
    <div class="mb-3"><p><lable>Last Name:</lable>
        <input type= "text" class="form-control" name= "Lname" placeholder="Only string">
        <span class="error"> * <?php echo $lnameR; ?></span>
    </div>
   
    <div class="mb-3"><lable>Age:</lable>
       <input type= "text" class="form-control" name= "age" placeholder="Only Number">
       <span class="error"> * <?php echo $ageR; ?></span>
    </div>
    <div class="mb-3"><lable>Gender:</lable><span class="error"> * <?php echo $genderR; ?> </span><br>
         <span><input type= "radio" name= "sex" value="Male">Male
         <input type= "radio" name= "sex" value="Female">Female</span>
    </div>
    <div class="mb-3"><br><lable>Birth Date:</lable>
         <input type= "date" class="form-control" name= "birthdate">
        <span class="error"> * <?php echo $birthR; ?></span>
    </div>
    
    <div class="mb-3"><lable>E-mail Address:</lable>
         <input type= "email" class="form-control" name= "email" placeholder="name@domain.com"> 
        <span class="error"> * <?php echo $emailR; ?></span>
    </div>
    <div class="mb-3"><lable>Websit Address:</lable>
         <input type= "url" class="form-control" name= "Web" placeholder="https://www.domainname.com"> 
        <span class="error"> * <?php echo $webR; ?></span>
    </div>
    <div class="mb-3"><lable>Phone Number:</lable>
         <input type= "tel" class="form-control" name= "phonenumber" placeholder= "0948773837" pattern="\d{10}">
         <span class="error"> * <?php echo "<br>" . $phonR; ?></span>
    </div>
            
    <div class="mb-3"><lable>Select Your Address:</label><br>
        <select class="Kselect" name="Kbselect">
            <option name= "none" value= "None">None</option>
            <option name= "kebele_01" value= "Kebele 01">Kebele-01</option>
            <option name= "kebele_02" value= "Kebele 02">Kebele-02</option>
            <option name= "kebele_03" value= "Kebele 03">Kebele-03</option>
            <option name= "azmach" value= "Azmach-k">Azmach</option>
            <option name= "dimama" value= "Dimama-k">Dimama</option>
            <option name= "shinkuri" value= "Shinkuri-k">Shinkuri</option>
            <input type= 'text' name= 'otherkeb' placeholder='No found write here'>
            <span class="error"> * <?php echo $KselectR; ?></span>
        </select>  
    </div>
        
        
  <!-- <div class="mb-3">
      <label for="firstname" class="fname-label">First Name</label>
      <input type="text" class="form-control" id="firstname" name="fname">
    </div>
    <div class="mb-3">
      <label for="lastname" class="lname-label">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lname">
    </div>
    <div class="mb-3">
      <label for="dob" class="dob-label">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob1">
    </div>
    <div class="mb-3">
      <label for="speciality" class="dob-label">Area of Expertise</label>
      <select class="form-control" id="speciality" name="select1">
        <option>Database Administrator</option>
        <option> Software Engineer</option>
        <option>Web Administrator</option>
        <option>Other</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="Email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="emaill">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="phone">
      <div id="emailHelp" class="form-text">We'll never share your Phone number with anyone else.</div>
    </div> -->
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form> 