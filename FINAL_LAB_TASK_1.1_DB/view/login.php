<?php 
	
	if(isset($_GET['error']))
	{
		if($_GET['error'] == "invalid user")
		{
			echo "username/password not valid";
		}
		if($_GET['error'] == "null username")
		{
			echo "username is empty";
		}
		if($_GET['error'] == "null password")
		{
			echo "password is empty";
		}

	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
</head>
<body>
	<form method="post" action="../php/logcheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>username</td>
					<td>
					<input type="text" name="username" maxlength="15" placeholder="your name">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<label><input type="password" name="password" placeholder="your password" minlength="8" required></label>
					</td>
				</tr>
				<tr>
					<td></td>
				
					<td>
						<input type="submit" name="submit" value="submit">
					</td>
				</tr>	
			</table>
		</fieldset>
	</form>

</body>
</html>