<?php
	session_start();

	if(isset($_POST['submit'])){


		if(empty( $_POST['UserId']) && empty($_POST['password']))
		{

			echo "null submission";
			header('location: login.html');

		}
		else
		 {
			setcookie('isValid', 'true', '/', time()+3600);
			//echo "Login succesful!"
			header('location: userhome.html');
		}	

	}		


?>