<?php 
$fname=$mname=$lname=$age=$phon=$email=$birth=$gender=$web=$dbkebele=$Kselect="";//declaration of name 
$fnameR=$mnameR=$lnameR=$ageR=$phonR=$emailR=$birthR=$genderR=$webR=$dbkebeleR=$KselectR="";//Errror declaration

if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(empty($_POST["Fname"])){
        $fnameR= "Name is required";    
    }
    else{
        $fname=input_set($_POST["Fname"]);
        //Check the name validation
			if(!preg_match("/^[a-zA-Z ]*$/", $fname))//Take care there is space
			{
			$fnameR= "Only letters and white space is allowed" ;
            $fname="";
			}
    }
    if(empty($_POST["Mname"])){
        $mnameR= "Name is required";    
    }
    else{
        $mname=input_set($_POST["Mname"]);
        //Check the name validation
			if(!preg_match("/^[a-zA-Z ]*$/", $mname))//Take care there is space
			{
			$mnameR= "Only letters and white space is allowed" ;
            $mname="";
			}
    }
    if(empty($_POST["Lname"])){
        $lnameR= "Name is required";    
    }
    else{
        $lname=input_set($_POST["Lname"]);
        //Check the name validation
			if(!preg_match("/^[a-zA-Z ]*$/", $lname))//Take care there is space
			{
			$lnameR= "Only letters and white space is allowed" ;
            $lname="";
			}
    }
    if(empty($_POST["age"])){
        $ageR="Age is required";
    }
    else{
        $age= input_set($_POST["age"]);
        //check age validation
        if(!preg_match("/^[0-9]*$/", $age))//Take care there is space
			{
			$ageR= "posetive integer number is allowed" ;
            $age="";
			}
    }
    if(empty($_POST["phonenumber"])){
        $phonR="Phone num is required";
    }
    else{
        $phon= input_set($_POST["phonenumber"]);
        //check phone number validation
        if(!preg_match("/^[0-9 ]*$/",$phon)){
            $phonR= "posetive integer number is allowed" ;
            $phon= "";
        }
    }
    if(empty($_POST["email"])){
        $emailR="E-mail is required";
    }
    else{
        $email= input_set($_POST["email"]);
        //check email validation
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
			$emailR="Invalid email adress";
            $email=""; 	
			}
    }
    if(empty($_POST["birthdate"])){
        $birthR="Birth date is required";
    }
    else{
        $birth= input_set($_POST["birthdate"]);
    }
    if(empty($_POST["sex"])){
        $genderR="Gender is required";
        $birth="";
    }
    else{
        $gender= input_set($_POST["sex"]);
    }
    if(empty($_POST['Web']))
		    { $webR="websit is required";
                $gender=""; }
		else 
		    { 
			$web=input_set($_POST['Web']);
			//Check the url
			if(!preg_match("/\b(?:(?:https|ftp):\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web))
			{
			 $webR="Invalid URL";
             $web="";
			}
			} 
    if((empty($_POST["otherkeb"]) && $_POST["Kbselect"]=="None") || empty($_POST["Kbselect"]))
        {
        $KselectR="Kebele is required";
        }
    elseif($_POST["Kbselect"]!="None")
        {
        $Kselect=input_set($_POST['Kbselect']);
        }
    elseif(!empty($_POST["otherkeb"]))
        {
        $Kselect=input_set($_POST['otherkeb']);
        }  
}        
function input_set($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>