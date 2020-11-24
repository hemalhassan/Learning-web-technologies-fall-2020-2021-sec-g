<?php 
	session_start();
	if(isset($_POST['submit']))
	{
		$uname = $_POST['username'];
		$pass = $_POST['password'];
	

	if($uname == "")
	{
		//echo "username is empty";
		header('location: ../view/login.php');
	}
	if($pass == "")
	{
		//echo "password is empty...";
		header('location: ../view/login.php');
	}
	else{

		if($uname == $pass)
		{
			//echo "valid user";
			$_SESSION['isvalid'] == "true";
			header('location: ../view/home.php');
		}
	else{
			//echo "invalid user.......>>>>>>0please register OR log in";
			header('location: ../view/login.php');

		}

	}
}

 ?>