<?php
	session_start();

	if(isset($_POST['submit'])){


		if(empty( $_POST['User name']) && empty($_POST['password']))
		{
			echo "null submission";

		}
		else
		 {
			echo "Login succesful!"
			header('location: ../db/db.php');
		}	

			
}

?>