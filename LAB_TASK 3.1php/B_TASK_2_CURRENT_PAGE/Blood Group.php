<?php 
if(isset($_POST['submit'])){
	$Bloodgroup = $_POST['bloodgroup'];
	echo $Bloodgroup;
}



 ?>

<html>
<head>
	<title>Blood group</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>
				Blood group
			</legend>
			<select name="blood group"></select>
			<option value=""></option><hr/>

			<input type="submit" name="submit" value="submit">

		</fieldset>
	</form>

</body>
</html>