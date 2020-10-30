
<?php 


	$photo= $_POST['picture'];
	$userid= $_POST['userid'];

    if(empty($photo) || (empty($userid)))
    {
    	echo "Enter a valid number";
      echo "please upload your profile picture";
    }


 ?>