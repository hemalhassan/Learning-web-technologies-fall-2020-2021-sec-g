
<?php

 if (isset($_POST['submit'])) {
 	$Email = $_POST['Email'];

echo $Email;
 }

?>

<html>
<head>
	<title>Email input</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>
				Name
			</legend>
			<input type="text" name="name" value=""><hr/>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>