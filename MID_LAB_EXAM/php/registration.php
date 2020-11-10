<?php
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['Id'];
		$password = $_POST['password'];
		$cpassword = $_POST['confirm password'];
		$name = $_POST['name'];

		if($_POST['id'] != "" and $_POST['password'] != "" and $_POST['cpassword'] != "" and $_POST['name'] != "")
		{
			if($_POST['password'] == $_POST['cpassword'])
			{
				$_SESSION['id']=$_POST['id'];
                $_SESSION['password']=$_POST['password'];
                $_SESSION['name']=$_POST['name'];



				echo "Registration succesful!"
				header('location:Login.html');
			}
			else
			 {  echo "password didnt match. Try again!";
				header('location:registration.html');
			 }


		}
	}
?>
