<?php 
	require('header.php');
	$img = "";
	if(isset($_SESSION['img']))
	{
		$img = $_SESSION[img];
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PROFILE PAGE</title>
</head>
<body>
	<h1>Welcome Home, Hemal Hassan</h1><br>
	<img src="../assets/<?=$img?>" width="100px" height="100px"><br>

	<form method="post" action="imgcheck.php" enctype="multipart/form-data">
		<input type="file" name="mypic">
		<input type="submit" name="submit" value="upload">
		
	</form>
</body>
</html>