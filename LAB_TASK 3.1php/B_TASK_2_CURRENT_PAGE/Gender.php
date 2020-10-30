<?php 

	if(isset($_POST['submit'])){
		 	$gender = $_POST['gender'];
 	echo $gender;
	}




 ?>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>
				Gender
			</legend>
			<input type="radio" name="gender"> Male
			<input type="radio" name="gender"> Female
			<input type="radio" name="gender"> others <hr/>

			<input type="submit" name="submit" value="submit">

		</fieldset>
	</form>

</body>
</html>