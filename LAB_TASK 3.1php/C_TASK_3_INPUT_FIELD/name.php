<html>
<head>
	<title>Name input</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>
				Name
			</legend>
			<input type="text" name="name" value="<?php

 if (isset($_POST['submit'])) {
 	$name = $_POST['name'];
    echo $name;
 }?>">

          <hr/>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>