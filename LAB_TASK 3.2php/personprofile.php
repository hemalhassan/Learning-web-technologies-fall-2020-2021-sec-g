<?php

if(isset($_POST['submit']))
  {
    
    $name=$_POST['name'];

    if($name == " " || strlen($name) < 2  )
    { 
      echo"Enter a valid name"; 

    }


    $email=$_POST['email'];

    if($email==" ")
    {
      echo "Enter your email address";
    }
  


    $gender = $_POST['gender'];

    if($gender == "")
    {
      echo "Enter your gender";
    }
  
              
    $date = $_POST['dateOfBirth'];

    if($date= "")
    {
      echo "Enter your date of birth";
    }
  

    $bloodGroup = $_POST['bloodGroup'];

    if($bloodGroup = "")
    {
      echo "Select your blood group";
    }
  


     $degree = $_POST['degree'];

     if($degree = "")
    {
      echo "Select degree";

    }
  
    
    $photo= $_POST['picture'];

    if(empty($photo))
    {
      echo "please upload your profile picture";
    }
  
  }

?>