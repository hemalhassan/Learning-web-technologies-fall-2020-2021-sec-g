
<?php 


	$photo= $_POST['picture'];
	$userid= $_POST['userid'];

    if(empty($photo) || (empty($userid)))
    {
      echo "please upload your profile picture";
    }


 ?>