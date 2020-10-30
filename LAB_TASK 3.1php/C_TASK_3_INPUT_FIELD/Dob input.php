<?php
	
	if(isset($_POST['submit'])){
		$date = $_POST['date'];

	echo $date;

	}





 ?>
<html>
<head>
	<title>dob input</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Date of birth</legend>

			<input type="date" name="dob" value="<?php
	
	if(isset($_POST['submit'])){
		$date = $_POST['date'];

	echo $date;

	}





 ?>"><hr/>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>