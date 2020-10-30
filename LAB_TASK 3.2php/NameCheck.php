<?php 

if(isset($_POST['submit']))
  {
    
    $name=$_POST['name'];
}
    if($name == " " || strlen($name) < 2  )
    { 
      echo"Enter a valid name"; 

    }elseif ($name == " ") {
    echo"Enter must with a letter"; 
    }elseif ($name == " ") {

    	echo"Cannot be empty"
   }



 ?>