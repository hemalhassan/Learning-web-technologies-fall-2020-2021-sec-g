<?php

 if (isset($_POST['submit'])) {
 	$name = $_POST['name'];

echo $name;
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
				Email
			</legend>
			<input type="text" name="name" value="<?php

 if (isset($_POST['submit'])){
 	$Email = $_POST['email'];

echo $email;
 }?>"><hr/>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>