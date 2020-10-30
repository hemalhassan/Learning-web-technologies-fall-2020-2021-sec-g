
<?php 
if(isset($_POST['submit'])){
	$degree = $_POST['degree'];
	echo $degree;
}



 ?>


<html>
<head>
	<title>Degree Input</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>
				Degree
			</legend>
			<input type="checkbox" name="degree"> SSC
			<input type="checkbox" name="degree"> HSC
			<input type="checkbox" name="degree"> BSc <hr/>

			<input type="submit" name="submit" value="submit">

		</fieldset>
	</form>

</body>
</html>